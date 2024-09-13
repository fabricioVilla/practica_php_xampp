

function recuperaValues(arrayBody){
    for (const key in arrayBody) {
        try {
            let valor_input = document.getElementById(key);
            arrayBody[key]=valor_input.value=='on'?valor_input.checked:valor_input.value;   
        } catch (error) {
            console.log('::::::::::error: ', error);
        }
    }
    return arrayBody;
}

function setValues(arrayBody){
    for (const key in arrayBody) {
        try {
            document.getElementById(key).value=arrayBody[key]; 
        } catch (error) {
            console.log('::::::::::error: ', error);
        }
    }
}


function recuperaObjetoHtml(key){
    return document.getElementById(key);
}

function setValorElemtoHtml(key, valor){
    document.getElementById(key).value=valor
}

function setTextoElemtoHtml(key, valor){
    document.getElementById(key).textContent=valor
}

function setClaesElemtoHtml(key, valor){
    document.getElementById(key).className =valor
}