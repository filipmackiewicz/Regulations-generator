function Clear(element){
    document.querySelector(element).value = '';
}

function Copy(element){
    document.querySelector(element).select();
    document.execCommand('copy');
}

function Export2Word(element, filename = ''){
    var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
    var postHtml = "</body></html>";
    var html = preHtml+document.querySelector(element + " textarea").value.replaceAll('<img src="/img/cms','<img src="https://generator.i-host.pl/assets/img/docs')+postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });
    

    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);
    
    filename = filename?filename+'.doc':'document.doc';

    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob ){
        navigator.msSaveOrOpenBlob(blob, filename);
    }else{
        downloadLink.href = url;
        

        downloadLink.download = filename;
        

        downloadLink.click();
    }
    
    document.body.removeChild(downloadLink);
}


const searchInput = document.querySelector("[data-search]");
if(searchInput != null){
    searchInput.addEventListener("input", e => {
        const value = e.target.value.toLowerCase();
        const buttons = document.querySelectorAll('.buttons');
        if (value != ''){
            for (var i=0; i<buttons.length; i++){
                if (buttons[i].querySelector('.company').innerHTML.toLowerCase().includes(value)){
                    buttons[i].classList.remove('hide');
                } else {
                    buttons[i].classList.add('hide');
                }
            }
        }else {
            for (var i=0; i<buttons.length; i++){
                buttons[i].classList.remove('hide');
            }
        }
    })
}


const buttonDelete = document.getElementById('remove');
if(buttonDelete != null){
    buttonDelete.addEventListener("submit", () => {
        if(!confirm("Czy na pewno chcesz usunąć firmę z bazy danych?")){
            event.preventDefault();
        }
    })
}



