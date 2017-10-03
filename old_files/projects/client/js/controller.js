var renderMenu = function(res) {
  var menu;

  menu = res.map(itm => itm.menu_title);
  menu = singleSplit(toUpper(menu));
  console.log(menu);

  new Vue({
    el: "#app-menu",
    data: {
      menu: menu
    }
  })

};

var renderPorjects = function(res) {

  new Vue({
    el: "#app-content",
    data: {
      projects: res
    }
  })
};

var toUpper = function(arr) {
  return arr.map(itm => itm.toUpperCase());
};

var singleSplit = function(arr) {
  return arr.map(itm => itm.split('').join(' '));
};
