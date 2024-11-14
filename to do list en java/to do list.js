const boton = document.getElementById('botonXD');
const inputboton = document.getElementById('pendiente');
const listapendientes = document.getElementById('listapendientes');

//evencto de click al boton
boton.addEventListener('click',function()
{
    //obtenemos el valor del campo de texto
    const valorpendiente = inputboton.value;

    //verificamos si no esta vacio
    if (valorpendiente.trim() !== '') 
    {
        const nuevopendiente = document.createElement('li');
        //creamos un contenedor para el item y el checkbox
        const contenedorpendiente = document.createElement('span');
        //añadimos in checkbox
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        //evento del checkbox
        checkbox.addEventListener('change',function()
        {
            if(checkbox.checked)
            {
                contenedorpendiente.style.textDecoration = 'line-through';
                //creamos el boton de eliminar
                const botonfragged = document.createElement('button');
                botonfragged.textContent = 'Eliminar';
                botonfragged.className = 'botoneliminar';
                //añadir evento al botoneliminar
                botonfragged.addEventListener('click',function()
                {
                    listapendientes.removeChild(nuevopendiente);
                });
                if(!nuevopendiente.querySelector('button'))
                {
                    nuevopendiente.appendChild(botonfragged);
                }
            }
            else
            {
                contenedorpendiente.style.textDecoration = 'none';
                //caso de que desmarruqemos, ocultar eliminar
                const botonfragged = nuevopendiente.querySelector('button');
                if(botonfragged)
                {
                    nuevopendiente.removeChild(botonfragged);
                }
            }
        });
        //asignamos el texto al contenedor
        contenedorpendiente.textContent = valorpendiente;
        //crear un nuevo elemento <li> en la lista
        nuevopendiente.appendChild(checkbox);
        nuevopendiente.appendChild(contenedorpendiente);
        //añadimos el elementos a la lista de pendientes
        listapendientes.appendChild(nuevopendiente);
        //limpiamos el input text despues de añadir el primer elemento
        inputboton.value = '';
    }
    else
    {
        //alertar si esta vacio
        alert('espacio vacio, llenalo pues >:(');
    }
});
