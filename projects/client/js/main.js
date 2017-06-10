$(document).ready(function(){
  init();

  console.log("Ready to rock!");
});

var promise = new Promise((resolve, reject) => {
  // setTimeout(function(){
  //   resolve("Success!");
  // }, 250);
});

var init = function() {
  var urls = {},
      url,
      debug = true;

  url = window.location.href +
    debug ?
    "./data/menu.json" :
    "";

  loadData(url);
}

var loadData = function(url) {
  console.log(url);
  /**
   * for menu
   */
  $.ajax({
    type: "GET",
    url: url,
    success: function(res) {
      console.log("Json loaded.");
      renderMenu(res.projects);
      renderPorjects(res.projects);
    },
    error: function(res) {
      console.warn(url + " load failed.");
    }
  })
}
