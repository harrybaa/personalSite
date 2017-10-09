var GridTextFactory = function(data, options) {}

GridTextFactory.prototype = {

  init: function(data, options) {
    
    if (!data || Object.prototype.toString(data) !== "[obejct Array]") {
      throw new Error("Not valid data for creat grid.");
      return;
    }
    
    this.text = this.splitData(data);
    
    return this.creatDoms(options);
  },
  
  splitData: function(data) {

    this.text = [];

    for (let i = 0; i < data.length; i++) {
      let newSetence = data[i].split("");
      this.text.push(newSetence);
    }
  },

  creatDoms: function(options) {
    var vitualDom = document.createElement("table");

    this.text.forEach(row => {
      let newRowDom = document.createElement("th");
    });
  }
}