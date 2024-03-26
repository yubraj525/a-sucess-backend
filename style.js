let searchform=document.querySelector('.searchform');
let cart=document.querySelector('.shopping-cart');
let btn=document.querySelector('#searchbtn');
let login=document.querySelector('.login-form');
let user=document.querySelector('#userlogin');
document.querySelector('#searchbtn').onclick= () =>
{
    searchform.classList.toggle('active');
    cart.classList.toggle('repeat');

}
document.querySelector('#cartbtn').onclick= () =>
{
    cart.classList.toggle('active');
    searchform.classList.toggle('repeat');

}
document.querySelector('#userlogin').onclick= () =>
{
  login.classList.toggle('active');


}

