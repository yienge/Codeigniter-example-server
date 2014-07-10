<!--
/* 
js是一種順序性語言 宣告了函數之後還是要呼叫才會有效果
js在函式呼叫時 非物件變數皆是用pass by value，函數不可修改原值 
               物件變數則是用pass by reference，函數此時可修改物件原值。
js 使用方法有1. 包在<script>裡面 2. 寫在html元素屬性值裡面 3. 寫在.js檔裡面用呼叫的
JavaScript Object Notation = JSON 為js常用傳遞參數之方法
window.alert = alert , window.location = location , window基本上可以省略

常見事件用法：先為元件事件註冊callback function，再去撰寫對應callback function

註冊方法：
W3C and Microsoft Model:
var x = document.getElementById('somewhere');
W3C style:
x.addEventListener('click', navigator, false);
Microsoft style:
x.attachEvent('onclick', navigator);

解除事件方法：
traditional model:
x.onclick = null;
W3C style:
x.removeEventListener('click', navigator, false);
Microsoft style:
x.detachEvent('onclick', navigator);
*/

// ================================================================= function can be an argument

//Assign function to variable 
var func = function (name, age) {
	//alert('Hi, I am' + name + '. ' + age +' years old.');
};
// Pass function as argument to other function
function intro (name, age, func) { 
	func(name, age);
}
// What will happen if execute this one? intro('Patrick', '5', func);
intro('Patrick', '5', func);

// ================================================================= local and global variable

name = 'Patrick'; // global variable

function Echo () {
  //alert(name); // 沒有定義區域變數時會抓全域變數
  var name = 'SpongeBob'; // local variable
  //alert(name); // SpongeBob 
}

Echo(name);

// ================================================================= text concatanation

var text1 = 'What a nice day.', 
	text2 = 'How do you think?' ,
	result1;
result1 = text1 + text2;
//alert(result1);

// ================================================================= new array and delete

var a = new Array('apple', 'banana', 'orange');
//alert(typeof a);
delete a[2]
//alert(a);

// ================================================================= for loop

var ascii = {'A':65, 'B': 66, 'C':67}, 
	char;
document.write('The following is printed by js:<br>');
for (char in ascii) { 
	document.write(char + ':' + ascii[char] + '<br>');
}
document.write('<br>');

// ================================================================= Boolean variable

var bool = 'Jscript' === 'Jscript';
//alert('bool: ' + bool);

// ================================================================= Date object

var dateInstance01 = new Date();
//alert(dateInstance01);

// ================================================================= DOM API test

var div = document.getElementById("test");
//alert(div.innerHTML);

var input = document.getElementsByName("spin_value")[0];
//alert(input.parentNode.innerHTML);

var k = document.getElementsByTagName('h1')[0];
k.parentNode.appendChild(k);
k.setAttribute('class','selected');
k.setAttribute('id','gogo');
//alert(k.getAttribute('id'));

var z = document.getElementsByTagName('p')[0];
z.parentNode.removeChild(z);

var z = document.getElementsByTagName('header')[0];
var y = document.createElement('p'),
	x = document.createTextNode('Hello');
y.appendChild(x);
z.appendChild(y);
//alert(z.innerHTML);

document.body.getElementsByTagName('p')[2].innerHTML = '<p>YOYOYO</p>';

// ================================================================= BOM

//window.alert('Hihi');
//window.confirm('Are you sure?');
//window.prompt('Hello?','default');
//window.print();
//alert('History: ' + window.history.length);
//window.history.back();
//alert('host: '    + window.location.host);
//alert('port: '    + window.location.port);
//alert('href: '    + window.location.href);
//alert('pathname: '+ window.location.pathname);
//window.location.assign('http://localhost/index.php/book/books');
alert('cookie: ' + window.document.cookie);
alert('URL: ' + window.document.URL);

// ================================================================= Event Handler
function callback() {
	alert('Hey man, this is event handler!!');
}

var i = document.getElementById('search');
i.addEventListener('click', callback, false);

var j = document.getElementsByName('url')[0];
j.addEventListener('click', callback, false);
//j.removeEventListener('click', callback, false);
-->
