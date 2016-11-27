function is_local_storage(){
    try {
        return 'localStorage' in window && window['localStorage']!==null;
    }catch(e){
        return false;
    }
}
function save(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("tel1").value;
    localStorage.setItem(name,phone);
}
function del_storage(){
    if(confirm("Удалить все записи?")){
    localStorage.clear();
    alert("все записи удалены");
    }else{
        return;
    }
}
function create_table(){
    for (var i = 0; i < localStorage.length; ++i){
        alert(localStorage.key(i));
        alert(localStorage.getItem(localStorage.key(i)));
        
    }
}

