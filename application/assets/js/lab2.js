var ex = [
    '<div>Составить программу, которая по порядковому номеру месяца определяет время года, к которому относится этот месяц.</div>',
    '<div>Имеется n бактерий красного цвета. Через 1 такт времени красная бактерия меняется на зелёную, затем через 1 такт ' +
    'времени делится на красную и зелёную. Сколько будет всех бактерий через k тактов времени?</div>',
    '<div>Заполнить двумерный массив размерностью NxN (N нечётное число) ' +
    'целыми числами от 1 до N*N по следующим правилам:<br>' +
    'a) единица помещается в среднюю клетку первой строки;<br>' +
    'b) заполнение массива происходит по диагоналям вправо и вверх;<br>' +
    'c) при достижении верхней строки следующее число помещается в нижнюю ' +
    'строку так, как будто она находится над верхней строкой; ' +
    '<br>' +
    'd) при достижении крайнего правого столбца следующее число помещается ' +
    'в крайний левый столбец так, как будто он находится около крайнего ' +
    'правого столбца;<br>' +
    'e) при достижении верхней клетки крайнего правого столбца следует опуститься ' +
    'на одну строку ниже в вертикальном порядке и продолжать заполнение ' +
    'клеток по правилу;<br>' +
    'f) если клетка уже заполнена, следует опуститься на одну строку ниже в ' +
    'вертикальном порядке и продолжать заполнение клеток по правилу</div>',
    '<div>Задана окружность с центром в точке О(x0, y0) и радиусом R0, найти точки пересечения линии с осью абсцисс.</div>',
    '<div>Составить программу «сжатия» исходной строки символов: каждая ' +
    'подстрока, состоящая из нескольких вхождений одного и того же символа, ' +
    'должна быть заменена на текст«x(k)», где x- символ, а k- строка, являющаяся ' +
    'записью числа вхождений символа в исходную строку</div>',
];
var sol = [
    '<form action="/application/sols/first.php" method="POST" target="_blank" style="width:100%">' +
    '  <div id="first" style="display: block">' +
    '     <label>Выберите номер месяца</label>' +
    '     <input id="month-input" type="number" min="1" max="12" name="month" value="1"/>' +
    '     <div id="first-after-input" style="display: block">' +
    '     </div>'+
    '     <div class="container" style="justify-content: space-between">' +
    '        <button type="button" onclick="getMonth()">jsSend</button>' +
    '        <button type="submit">Send</button>' +
    '     </div>' +
    '  </div>' +
    '</form>',
    '<form action="/application/sols/second.php" method="POST" target="_blank" style="width:100%">'+
    '  <div id="second" style="display: block">'+
    '     <div style="display: block">'+
    '        <label>Введите количество красных:</label>' +
    '        <input id="red-input" type="number" min="0" name="red" value="1"/>' +
    '     </div>'+
    '     <div style="display: block">'+
    '        <label>Введите количество тактов:</label>' +
    '        <input id="takts-input" type="number" min="1" name="takts" value="1"/>' +
    '     </div>'+
    '     <div id="second-after-input" style="display: block">' +
    '     </div>'+
    '     <div class="container" style="justify-content: space-between">' +
    '        <button type="button" onclick="getBac()">jsSend</button>' +
    '        <button type="submit">Send</button>' +
    '     </div>' +
    '  </div>'+
    '</form>',
    '<form action="/application/sols/third.php" method="POST" target="_blank" style="width:100%">'+
    '  <div id="third" style="display: block">'+
    '     <div style="display: block">'+
    '        <label>Введите N:</label>' +
    '        <input id="mas-input" type="number" min="1" step="2" name="numb" value="1"/>' +
    '     </div>'+
    '     <div id="third-after-input" style="display: block">' +
    '     </div>'+
    '     <div class="container" style="justify-content: space-between">' +
    '        <button type="button" onclick="getArr()">jsSend</button>' +
    '        <button type="submit">Send</button>' +
    '     </div>' +
    '  </div>'+
    '</form>',
    '<form action="/application/sols/fourth.php" method="POST" target="_blank" style="width:100%">'+
    '  <div id="fourth" style="display: block">'+
    '     <div style="display: block">'+
    '        <label>Введите x:</label>' +
    '        <input id="x-coord-input" type="number" min="0" name="x_coord" value="1"/>' +
    '     </div>'+
    '     <div style="display: block">'+
    '        <label>Введите y:</label>' +
    '        <input id="y-coord-input" type="number" min="0" name="y_coord" value="1"/>' +
    '     </div>'+
    '     <div style="display: block">'+
    '        <label>Введите радиус:</label>' +
    '        <input id="radius-input" type="number" min="0" name="radius" value="1"/>' +
    '     </div>'+
    '     <div id="fourth-after-input" style="display: block">' +
    '     </div>'+
    '     <div class="container" style="justify-content: space-between">' +
    '        <button type="button" onclick="getCoord()">jsSend</button>' +
    '        <button type="submit">Send</button>' +
    '     </div>' +
    '  </div>'+
    '</form>',
    '<form action="/application/sols/fifth.php" method="POST" target="_blank" style="width:100%">'+
    '  <div id="fifth" style="display: block">'+
    '     <div style="display: block">'+
    '        <label>Введите исходную строку:</label>' +
    '        <input id="str-input" type="text" name="string"/>' +
    '     </div>'+
    '     <div id="fifth-after-input" style="display: block">' +
    '     </div>'+
    '     <div class="container" style="justify-content: space-between">' +
    '        <button type="button" onclick="getStr()">jsSend</button>' +
    '        <button type="submit">Send</button>' +
    '     </div>' +
    '  </div>'+
    '</form>',
];

window.onload = function (){
    listenerForLi();
    listener();
    document.getElementById("exercice").innerHTML =  ex[0];
    document.getElementById("solution").innerHTML = sol[0];
    getMonth();
};

function listenerForLi() {
    var lis = document.getElementById("left").getElementsByTagName("li");
    for (var num = 0; num < lis.length; num++) {
        lis[num].addEventListener("click", function (elem) {
            var el = elem.target;
            document.getElementById("exercice").innerHTML = ex[el.value];
            document.getElementById("solution").innerHTML = sol[el.value];
            for (var i = 0; i < lis.length; i++){
                lis[i].classList.remove("active");
            }
            el.classList.add("active");
        });
    }
}

function listener() {
    var lis = document.getElementById("mySelector");
    lis.addEventListener("change", function () {
        document.getElementById("second").style.display = "none";
        document.getElementById("third").style.display = "none";
        document.getElementById("fourth").style.display = "none";
        switch (lis.value) {
            case '2':
                document.getElementById("second").style.display = "flex";
                break;
            case '3':
                document.getElementById("third").style.display = "flex";
                break;
            case '4':
                document.getElementById("fourth").style.display = "flex";
                break;
        }
    });
}

function getMonth() {
    var val = document.getElementById("month-input");
    var params = 'month=' + val.value;
    doRq('first', params);
}

function getBac() {
    var red = document.getElementById("red-input");
    var takts = document.getElementById("takts-input");
    var params = 'red=' + red.value + '&takts=' + takts.value;
    doRq('second', params);
}

function getArr() {
    var numb = document.getElementById("mas-input");
    var params = 'numb=' + numb.value ;
    doRq('third', params);
}

function getCoord() {
    var x_coord = document.getElementById("x-coord-input");
    var y_coord = document.getElementById("y-coord-input");
    var radius = document.getElementById("radius-input");
    var params = 'x_coord=' + x_coord.value + '&y_coord=' + y_coord.value + '&radius=' + radius.value;
    doRq('fourth', params);
}

function getStr() {
    var str = document.getElementById("str-input");
    var params = 'string=' + str.value;
    doRq('fifth', params);
}

function doRq(name, params) {
    var request = new XMLHttpRequest();
    request.open('POST','/application/sols/'+ name +'.php',true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    request.addEventListener('readystatechange', function() {
        if ((request.readyState==4) && (request.status==200)) {
            document.getElementById(name +'-after-input').innerHTML = JSON.parse(request.response);
        }
    });
    request.send(params);
}