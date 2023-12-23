const toggleCheckbox=document.querySelector('.toggle-checkbox');
const searchtoggle=document.querySelector('.searchclick');
const searchicon =document.querySelector('.fa-magnifying-glass');


searchicon.addEventListener('click',function(){
    if(searchtoggle.style.display ==='none')
    {
        searchtoggle.style.display='block';
    }
    else{
        searchtoggle.style.display='none';
    }
})

toggleCheckbox.addEventListener('change',function(){
    if(this.checked){
        document.body.classList.add('body');
    }
    else{
        document.body.classList.remove('body');
    }
})