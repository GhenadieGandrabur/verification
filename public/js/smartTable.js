const SMART_TABLE_CLASS_NAME = "smart-table";
const SELECTED_CLASS_NAME = "selected";

class SmartTable {
  constructor(table) {
    this.table = table;
    this.trs = Array.from(this.table.querySelectorAll("tr[data-id]"));
    this.selected = undefined;
    this.initEvents();
  }

  initEvents() {
    const $this = this;
    window.addEventListener("keydown", function (event) {
      switch (event.code) {
        case "ArrowDown":
          $this.selectNext();
          break;
        case "ArrowUp":
          $this.selectPrevious();
          break;
        case "KeyI":
          $this.editSelectedRow();
          break;
      }
    });

    window.addEventListener("click", function (event) {
      const target = event.target;
      const tagName = target.tagName.toLowerCase();
      if (["a", "input", "button"].includes(tagName)) {
        return;
      }

      const tr = target.closest(`.${SMART_TABLE_CLASS_NAME} tr`);
      if (tr && tr.dataset.id) {
        event.preventDefault();
        const index = $this.trs.indexOf(tr);
        $this.selected = index >= 0 ? index : undefined;
        $this.select();
      }
    });

    window.addEventListener("dblclick", function () {
      $this.editSelectedRow();
    });
  }

  selectNext() {
    if (this.selected === undefined) {
      this.selected = 0;
    } else {
      this.selected = Math.min(this.trs.length - 1, this.selected + 1);
    }

    this.select();
  }

  selectPrevious() {
    if (this.selected === undefined) {
      return;
    } else {
      this.selected = Math.max(0, this.selected - 1);
    }

    this.select();
  }

  clearSelection() {
    this.trs.forEach(tr => tr.classList.remove(SELECTED_CLASS_NAME));
  }

  select() {
    this.clearSelection();
    this.trs[this.selected].classList.add(SELECTED_CLASS_NAME);
  }

  editSelectedRow() {
    const controller = this.table.dataset.controller;
    const id = this.trs[this.selected]?.dataset.id;
    if (id) {
      document.location.href = `/${controller}/edit?id=${id}`;
    }
  }
}