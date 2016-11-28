function is_local_storage(){
    try {
        return 'localStorage' in window && window['localStorage']!==null;
    }catch(e){
        return false;
    }
}

//нихера не работает проверка
function create_table(){
    if (localStorage.length == false){
        return;
    }else{
    var tbody = document.getElementById("output");
    for (var i = 0; i < localStorage.length; ++i){
        row = tbody.insertRow(i);
        cell = row.insertCell(0);
        cell.innerHTML = i;
        cell = row.insertCell(1);
        cell.innerHTML = localStorage.key(i);
        cell = row.insertCell(2);
        cell.innerHTML = localStorage.getItem(localStorage.key(i));
        cell = row.insertCell(3);
        
    }
}
    
}
//тут тоже нихера не работает проверка
function save(){
    var name = document.getElementById("name").value;
    var phone = document.getElementById("tel1").value;
    if (name && phone == false){
        return;
    }else{
    localStorage.setItem(name,phone);
    create_table();
}
}
function del_storage(){
    if(confirm("Удалить все записи?")){
    localStorage.clear();
    alert("все записи удалены");
    create_table();
    }else{
        return;
    }
}
