<div class="row">
<div class="col-12 col-s-12">
<h2>Certificate de verificare a tahografului</h2>
<div class="d-flex justify-content-between">
    <p style="display:inline"><a class="button" href="/certificates/edit">New certificate</a> <?= $totalCertificates ?> certificate in BD

    <ul style="float:right" class="smart-table-hint">
        <li><kbd>↑</kbd> - previous row</li>
        <li><kbd>↓</kbd> - next row</li>
        <li><kbd>i</kbd> - edit selected row</li>
    </ul>
    </p>
</div>
<h3 style="float:right;">Search <input type="text" id="myInput" onkeyup="findaword()" placeholder="Search" title="find" style="padding:5px ; width:300px; font-size:18px"></h3>

<table width="100%" class="fortable smart-table" data-controller="certificates" id="myTable">
    <th>ID</th>
    <th>Date</th>
    <th>Vehicol</th>
    <th>Proprietar</th>
    <th>Autor</th>
    <th>Print</th>
    <th>Delete</th>

   

    <?php foreach ($certificates as $certificate) : ?>
        <tr data-id="<?= $certificate->id  ?>">
            <td> <?= $certificate->id  ?></td>
            <td> <?php $date = new DateTime($certificate->date ); echo $date->format('d.m. Y H:i:s'); ?></td>
            <td> <?= $certificate->vehicle  ?></td>
            <td> <?= $certificate->proprietar  ?></td>
            <td> <?= $certificate->authorId	  ?></td>
            <td><a href="/certificates/print?id=<?= $certificate->id  ?>" target="_blank">🖨</a></td>
            <td>
                <form action="/certificate/delete" method="post">
                    <input type="hidden" name="id" value="<?= $certificate->id  ?>">
                    <input type="submit" value="X">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
</div>
</div>

<script>
    window.addEventListener('keydown', function (event) {
        if (["TEXTAREA", "INPUT", "SELECT"].includes(event.target.tagName)) {
            return;
        }

        if (event.code === "Insert") {
            event.preventDefault();
            document.location.href = '/certificates/edit';
        }
    });

    document.querySelectorAll('.smart-table').forEach(table => new SmartTable(table));

    ////////////////////////////

        
    function findaword() {
      var input, filter, table, tr, td, tds, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        let iscontaine = false;
//td = tr[i].getElementsByTagName("td")[0];
        tds = tr[i].getElementsByTagName("td");   
        Array.from(tds).forEach(td => {
          if (!iscontaine) {
            txtValue = td.textContent || td.innerText;
            console.log(txtValue,txtValue.toUpperCase().indexOf(filter),i);
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
             tr[i].style.display = "";
             iscontaine = true;
            } else {
             tr[i].style.display = "none";
            }
          }   
        });   
        
      }
    }


    
</script>