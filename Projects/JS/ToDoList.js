// Create functions for the model. This will include
// constructors for the To Do List and Task Items
// as well as any functions that need to manipulate
// the model. Validation of the model should also
// be included in the model functions.


// event handler: when button clicked, add item to model

//This function is a constructor for a Task
var toDoList;
var total=-1;       // start total at -1, so after adding 1st element index is 0

function newTask(name) {
    var task = {name: name, status: "incomplete", completionDate: ""};
      toDoList.push(task);
      total++;
 
}

function totalTasks() {
    var total = 0;
    var i=0;
    for (i =0; i< toDoList.length;i++) {
        total+=toDoList[i].age;
    }
    return total;
}
//This function is a consturctor for the ToDoList

function ToDoList() {
    toDoList = [];
    }
function AddTask()
{
      if (total==-1) {
        this.ToDoList();
    }
    var tasktoAdd = document.getElementById("taskAddText");
    if (tasktoAdd.value=="") {
        alert("Task name is blank");
    }
    else {
    var task = newTask(tasktoAdd.value);
    
	// get to do item from user input
   
	// create new task

	// add new task to list
		
	//update view
	this.addItemView();
    }
}

function updateStatus(taskIndex)
{
    var task = toDoList[taskIndex];
    
    
    if (toDoList[taskIndex].status=="incomplete")       // make complete and add date
	{
        task.status="complete";
       
        task.completionDate = getCurrentTime();
        
    }
    else if (toDoList[taskIndex].status=="complete") {
        task.status="incomplete";
        task.completionDate="";
        
    }
	// update the model: if the item has been checked, set status to complete
	// and add completion date. If item is unchecked, set status to incomplete
	// and set completion date to be empty.


	// update the view
	updateItemView(taskIndex);

}
function getCurrentTime() {
     offset = -5.0

    clientDate = new Date();
    utc = clientDate.getTime() + (clientDate.getTimezoneOffset() * 60000);

    serverDate = new Date(utc + (3600000*offset));

    return (serverDate.toLocaleString());
}
//this function updates the item view
// Since it updates a specific item it needs to take in an index
function updateItemView(taskIndex) {
    var task = toDoList[taskIndex];
    
    var toDolabel = document.getElementById(task.name+"_label");
    toDolabel.textContent=task.name+" " + task.completionDate;
    
}

function addItemView()

{
	// This function takes care of rendering the to do list
	// All UI elements should be added to the "container" 
	// section of the HTML. 

	// get container element by id

   var container =  document.getElementById("container");
   var item = document.createElement("input");      // create checkbox element
   var taskName = document.getElementById("taskAddText").value;
   
   item.type="checkbox";
   item.name=taskName;
   item.value=taskName;
   var currentIndex=total;
   item.id=currentIndex;
   item.onclick= function () {
       updateStatus(currentIndex)};       // this will be the current total of the list
   
   var label = document.createElement("label");
   label.htmlFor=taskName;
   label.id=taskName+"_label";
   label.appendChild(document.createTextNode(taskName));
	// go through todo list items and add them
	// each to do item should have the name and completion date, if applicable
	// you will also add an event handler that is called when a checkbox
	// item changes
    
  
	container.appendChild(item);
    container.appendChild(label);
    container.appendChild(document.createElement("br"));

    // clear the text in the input field for todo item
	document.getElementById("taskAddText").value = "";

}

