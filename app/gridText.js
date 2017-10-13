var  Tools = require("./tools.js");
const tools = new Tools();

var GridTextFactory = function() {
  this.text = [];
  this.options = {};
}

GridTextFactory.prototype = {

  init: function(data, options) {
    
    if (!data || !Array.isArray(data)) {
      throw new Error("Not valid data for creat grid.");
      return;
    }
    
    this.text = this.splitData(data);
    this.options = tools.adapter(options, {
      oritation: "horizon",
      size: "normal"
    });

    return this.creat();
  },
  
  splitData: function(data) {
    var text = [];

    for (let i = 0; i < data.length; i++) {
      let newSetence = data[i].split("");
      text.push(newSetence);
    }

    return text;
  },

  creat: function() {

    // TODO: 为options适配样式

    var vitualDom = document.createElement("table");

    this.text.forEach(row => {
      let newRow = document.createElement("tr");

      row.forEach(letter => {
        let newCell = document.createElement("td");
        newCell.innerText = letter;
        newRow.appendChild(newCell);
      });

      vitualDom.appendChild(newRow);
    });

    vitualDom.className = "gridText";

    return vitualDom;
  }
}

module.exports = GridTextFactory;