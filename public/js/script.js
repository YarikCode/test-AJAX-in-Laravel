// jQuery

/* 

$(document).ready(function () {
    $('#message_form').on('submit', function (e) {
        e.preventDefault();
        console.log($('#message_form').serialize());
        $.ajax({
            type: 'POST',
            url: '/sendmessage',
            data: $('#message_form').serialize(),
            success: function (data) {
                console.log('Успешно!');
            },
            error: function () {
                console.log('Провал!');
            }
        });
    });
});

*/

// Нативный JS

// Отправка нового письма
let messageForm = document.getElementById('message_form');

messageForm.addEventListener('submit', (e) => {
    let formData = new FormData(messageForm);
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/sendmessage');
    xhr.send(formData);
    xhr.onreadystatechange = handleFunc;
    function handleFunc(){
        if(xhr.readyState === 4 && xhr.status === 200){
            console.log("Успешно!");
        }
    }
});

// Загрузка всех писем
let updateForm = document.getElementById('update_form');
let tbody = document.getElementById('tbody');

updateForm.addEventListener('submit', (e) => {
    let formData = new FormData(updateForm);
    e.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '/load');
    xhr.responseType = 'json';
    xhr.send('formData');
    xhr.onreadystatechange = handleFunc;
    function handleFunc(){
        if(xhr.readyState === 4 && xhr.status === 200){
            let allMessges = xhr.response;
            console.log(allMessges);
            let responseString = "";
            for(let key in allMessges){
                responseString = responseString + "<tr><td><b>" + allMessges[key].id + "</b></td>" + "<td>" + allMessges[key].title + "</td>" + "<td>" + allMessges[key].text + "</td></tr>";
                tbody.innerHTML = responseString;
            }
        }
    }
});