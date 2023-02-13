ebtn=document.getElementsByName('edit_button');
for(let i=0;i<ebtn.length;i++){
    ebtn[i].addEventListener('click',function (event){
        event.preventDefault();
        console.log(i);
    })
}