import './bootstrap.js';
import './styles/app.scss';
import * as bootstrap from 'bootstrap'
import {  Ripple, initMDB } from 'mdb-ui-kit';
//initMDB({ Input });
initMDB({ Ripple });
document.addEventListener("DOMContentLoaded", function() {
    let summaries = document.querySelectorAll(".summary");
    summaries.forEach(function(summary) {
    let text = summary.textContent;
    let words = text.split(" ");
    if (words.length > 20) {
        let shortenedText = words.slice(0, 20).join(" ") + " ...";
        summary.textContent = shortenedText;
    }
    });
});