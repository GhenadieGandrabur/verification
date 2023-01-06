<div class="row">
    <div class="col-12 col-s-12 " style="margin:0; padding:0;">
    
     <div class="col-12 col-s-12 " style="margin:0; padding:0;">   
        <p><b>Certificate de verificare a tahografelor</b>   
<span style="float: right;"><?= $totalCertificates ?> certificate in BD</p></span>
       <!-- <div class="d-flex justify-content-between " style=" margin-bottom:10px;"></div>-->
     </div>
    
      <div class="col-12 col-s-12" style="margin:0; padding:0;">
            <div class="col-6 col-s-6" style="margin:0; padding:0;">
                 <a href="/certificates/edit"><button id="submit"> New certificate</button></a>    </div>          
                 <ul style="display:none" class="smart-table-hint">
                 <li><kbd>↑</kbd> - previous row</li>
                 <li><kbd>↓</kbd> - next row</li>
                 <li><kbd>i</kbd> - edit selected row</li>
                 </ul>
          
            <div class="col-6 col-s-6" style="margin:0; padding:0;">
                 <span style="float: right;"> <input type="text" id="myInput" onkeyup="findaword()" placeholder="🔍 Search" title="find" style="padding:3px ; width:300px; font-size:14px"></span>
            </div>
        
    </div>
        <div class="col-12 col-s-12" style="margin:0; padding:0;">
        <div style="overflow-x:auto;">
            <table width="100%" class="fortable smart-table" data-controller="certificates" id="myTable">
                <th>ID</th>
                <th>Date</th>
                <th>Vehicul</th>
                <th>Proprietar</th>
                <th>Autor</th>
                <th>Validity</th>
                <th>Print</th>
                <th>Delete</th>



                <?php foreach ($certificates as $certificate) : ?>
                    <tr data-id="<?= $certificate->id  ?>">
                        <td> <?= $certificate->id  ?></td>
                        <td> <?php $date = new DateTime($certificate->date);
                                echo $date->format('d.m. Y H:i:s'); ?></td>
                        <td> <?= $certificate->vehicle  ?></td>
                        <td> <?= $certificate->proprietar  ?></td>
                        <td> <?= $authorname->name     ?></td>
                        <td> <?= $certificate->validity;?></td>
                        <td><a href="/certificates/print?id=<?= $certificate->id  ?>" target="_blank">🖨</a></td>
                        <td>
                            <form action="/certificate/delete" method="post">
                                <input type="hidden" name="id" value="<?= $certificate->id  ?>">
                                <input type="submit" value="❌" id="submit" style="font-size:6px">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</div>


<script>
    window.addEventListener('keydown', function(event) {
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
            tds = tr[i].getElementsByTagName("td");
            Array.from(tds).forEach(td => {
                if (!iscontaine) {
                    txtValue = td.textContent || td.innerText;
                    console.log(txtValue, txtValue.toUpperCase().indexOf(filter), i);
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


    