var Tools = function() {
  
  this.$ = function(target) {
    return document.getElementById(target);
  }

  this.greeting = function(name) {
    console.log("Hello " + name + "!");
  }

  // 适配器，传入默认对象default，保留src中自定义值，补充缺失的默认值，删除多余的值。
  this.adapter = function(src, defult) {
    for(var i in defult) {
      defult[i] = src[i] || defult[i];
    }
    
    return defult;
  }
}

module.exports = Tools;