const button_add = document.getElementById("btn-add-task");
const cont_input = document.getElementById("input-add");
const lista_html = document.getElementById("list-task");



let lista = [];

button_add.addEventListener("click",addNewTask)

function addNewTask(){
  if(cont_input.value == ""){
    alert("Você não pode enviar algo vazio!")

  }else{
    lista.push({
        tarefa: cont_input.value,
        concluida: false,
       });
       
       cont_input.value = ''
       mostrarTarefas();
  }
   
}

function mostrarTarefas(){

    let NewList = ''

    lista.forEach( (item,posicao) => {
  
       
      NewList = NewList + ` 
        <li class="task ${item.concluida && "done"}" >
            <img src="checked.png" alt="" onclick="concluirTarefa(${posicao})">
            <p>${item.tarefa}</p>
            <img src="trash.png" alt="" id="remover" onclick="deletarItem(${posicao})">
        </li>`

       
    })

    lista_html.innerHTML = NewList

    localStorage.setItem("lista", JSON.stringify(lista)) //o primeiro parametro é o nome que a gnt dá pros itens que vão ficar no locla storage

}

function concluirTarefa(posicao){
    lista[posicao].concluida = !lista[posicao].concluida
    console.log(posicao);
    mostrarTarefas();
}

function deletarItem(posicao){
    lista.splice(posicao,1)
    console.log(posicao);
    mostrarTarefas();
}

function recarregarTarefas(){
    const tarefasLocalStorage = localStorage.getItem('lista');

    if(tarefasLocalStorage){ //verificação para só add se tiver algo na lista
        lista =JSON.parse(tarefasLocalStorage)  //transforma a string em onjseto dnv para ser utilizado na aplicação de mostrar na tela
    }

    mostrarTarefas()

   
}
recarregarTarefas()





    


