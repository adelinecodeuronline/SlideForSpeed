window.onload = function () {

    let input = document.querySelector('#file');
    input.addEventListener('change', showFileName);  

    let titre = document.querySelector('h1');
    titre.addEventListener('click', displaySign);

}   

    function showFileName(event) {
        let infoArea = document.querySelector('#file-upload-filename');
        let input = event.srcElement; 
        let fileName = input.files[0].name; 
    
        infoArea.textContent = 'Nom du fichier : ' + fileName;
    }

    function displaySign() {
        document.querySelector('#ada').style.display = 'block';
    }