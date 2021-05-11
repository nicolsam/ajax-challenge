import { Ajax } from "./ajax.js";

const ajax = new Ajax();

let inputSearch = document.getElementById("input-search");
let result = document.getElementById("show-result");

result.innerHTML = "<h3>Pesquise para poder encontrar resultados!</h3>";

inputSearch.addEventListener('keyup', function() {
    console.log(`InputSearch: ${inputSearch.value}`)
    if(inputSearch.value == "") {
        result.innerHTML = "<h3>Pesquise para poder encontrar resultados!</h3>";
    } else {
        getSearch(inputSearch.value)
    }
})

function getSearch(inputSearch) {
    console.log(`InputSearch dentro da função: ${inputSearch}`);
    try {
        ajax.requisitar(inputSearch, result);
    } catch(err) {
        console.log(`Um erro inesperado ocorreu! ${err.getMessagem()}`);
    }    
}





