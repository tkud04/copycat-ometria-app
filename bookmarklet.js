javascript:(() => {
   function bomb(id,email){
    let fd = new FormData();
    fd.append("id",id);
    fd.append("email",email);

  const req = new Request("https://nameless-reaches-19507.herokuapp.com/api/add-customer-id",{
     method: 'POST',
     body: fd
   });

   fetch(req)
    .then(response => response.json())
    .then(d => {
      console.log(d);
      if(d.status == "ok"){
         setTimeout(function(){
          ++counter; 
          if(updateCounter < payloads.length) updateOmetria();
         },1000);      
      }
    });  
   }

    console.log("basic bookmarklet working");
    let tableRows = document.querySelectorAll('tr'), data = [], counter = 0;
    for(let row of tableRows){
      let cells = row.cells;
      console.log("cells: ",cells);
          let idCell = cells.item(0), emailCell = cells.item(5);
          console.log("[idCell,emailCell]: ",[idCell,emailCell]);
          try{
            bomb(idCell.innerHTML, emailCell.innerHTML);
          }
          catch(e){
           console.log("Invalid td");
          }
    }
    console.log("data: ",data);
    })();