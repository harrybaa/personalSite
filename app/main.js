//main.js 
import css from "./style/main.scss";
var Tools = require("./tools.js");
var GridTextFactory = require("./gridText.js");

const tools = new Tools(); 
const gridTextFactory = new GridTextFactory();

var data = [" 你好！ ", " 陌生人！ "],
    options = {},
    titleDom = gridTextFactory.init(data, options),
    homeTitle = tools.$("homeTitle");
// homeTitle.appendChild(titleDom);