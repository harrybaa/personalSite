var Tools = function() {
  
  this.$ = function(target) {
    return target || document.getElementById(target);
  }

  this.greeting = function(name) {
    console.log("Hello " + name + "!");
  }
}

module.exports = Tools;