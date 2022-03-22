javascript:(() => {
    console.log("basic bookmarklet working");
    let tableRows = document.querySelectorAll('tr'), data = [];
    for(let row of tableRows){

      let cells = row.cells;
      console.log("cells: ",cells);
          let idCell = cells.item(0), emailCell = cells.item(5);
          console.log("[idCell,emailCell]: ",[idCell,emailCell]);
          try{
             data.push({
             id: idCell.innerHTML,
             email: emailCell.innerHTML
           });
          }
          catch(e){
           console.log("Invalid td");
          }
    }
    console.log("data: ",data);
    })();