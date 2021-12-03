"use strict";

function modify(e)
{
    alert(e.type +" on modify for "+ e.currentTarget.parentNode.id+" !");
}

function deleter(e)
{
    alert(e.type +" on remove for "+ e.currentTarget.parentNode.id+" !");
}

function newComment(id){
    return "<div id='user"+id+"'><h4>JILIJILI</h4><p>coucou.</p> <button class=\"modify\" onclick=\"editComment('user"+id+"')\">Modify Comment</button><button class=\"remove\" onclick=\"removeComment('user"+id+"')\">Remove Comment</button></div>"

}

function removeComment(id){
    document.getElementById(id).remove(); 
}

function editComment(id){
    let comment = document.getElementById(id);
    let p = comment.getElementsByTagName('p');
    document.getElementById('id_comm').innerHTML = id; 
    document.getElementById('editComm').innerHTML  = p[0].innerHTML;
    console.log(document.getElementById('editComm').innerHTML);
}

function updateComment(){
    if(document.getElementById('editComm').innerText==""){
        alert("Commentaire non valide"); 
    }
    else{
        let comment = document.getElementById(document.getElementById('id_comm').innerHTML);
        let p = comment.getElementsByTagName('p');
        p.innerHTML = document.getElementById('editComm').innerHTML; 
        document.getElementById('editComm').innerHTML = "";
    }
}

function addCommentNul(){
    let users = document.getElementById('users');
    users.innerHTML += "<div id='user3'><h4>JILIJILI</h4><p>coucou.</p> <button class=\"modify\" onclick=\"editComment('user3')\">Modify Comment</button><button class=\"remove\" onclick=\"removeComment('user3')\">Remove Comment</button></div>"
}

function addComment(){
    let users = document.getElementById('users');
    users.innerHTML += newComment(users.lastChild.nodeType+1);
}

document.getElementById("addNew").addEventListener("click",addComment);

document.getElementById("addNew").addEventListener("click", function(e){
    alert(e.type +" on add !");
})

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));

let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));