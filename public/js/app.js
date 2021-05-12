import { Ajax } from "./ajax.js";

const ajax = new Ajax();

let inputSearch = document.getElementById("input-search");
let result = document.getElementById("show-result");
let defaultFilter = "Name";

let nameFilter = document.querySelector("#nameFilter");
let ageFilter = document.querySelector("#ageFilter");
let girlFilter = document.querySelector("#girlFilter");
let boyFilter = document.querySelector("#boyFilter");

var buttonActived = [
    {
        name: nameFilter,
        actived: true,
    },
    {
        name: ageFilter,
        actived: false
    },
    {
        name: girlFilter,
        actived: false
    },
    {
        name: boyFilter,
        actived: false
    },
]

getSearch(inputSearch.value, defaultFilter);

inputSearch.addEventListener('keyup', function() {
    try {
        getSearch(inputSearch.value, defaultFilter);
    } catch(err) {
        console.log(`Um erro inesperado ocorreu! ${err.getMessagem()}`);
    }
})

function getSearch(inputSearch, filter) {
    try {
        ajax.requisitar(inputSearch, result, filter);
    } catch(err) {
        console.log(`Um erro inesperado ocorreu! ${err.getMessagem()}`);
    }   

}

function addActiveClass(selector, array) {
    Object.values(buttonActived).forEach((element) => {
        if(element.actived == true) {
            element.name.classList.remove("active");
            console.log(`Foi encontrado um elemento ativado.`);
        }
    })
    selector.classList.add("active");
    buttonActived[array].actived = true;
}


nameFilter.onclick = () => {
    defaultFilter = "Name";
    getSearch(inputSearch.value, defaultFilter);
    addActiveClass(nameFilter, 0);
};


ageFilter.onclick = () => {
    defaultFilter = "Number";
    getSearch(inputSearch.value, defaultFilter);
    addActiveClass(ageFilter, 1);
};


girlFilter.onclick = () => {
    defaultFilter = "Girls";
    getSearch(inputSearch.value, defaultFilter);
    addActiveClass(girlFilter, 2);
};


boyFilter.onclick = () => {
    defaultFilter = "Boys";
    getSearch(inputSearch.value, defaultFilter);
    addActiveClass(boyFilter, 3);
}

