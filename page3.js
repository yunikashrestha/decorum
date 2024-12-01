let name=['Coastal Living Room Interior Design','Modern Rustic Living Room Interior Design','Mid-Century Living Room Interior Design','Black And White Living Room Interior Design'];
let images=['coastal living.jpg','rustic room.jpg','mid1.jpg','black whire room.jpeg'];
let code='';
for(let i=0;i<4;i++)
{
  code+=`
 
<div style="border:1px solid black;margin: 30px 140px 0 140px;padding-bottom:20px; ">
    <div style='display: flex;justify-content: center;padding-top: 40px;gap:200px;align-items: center;'>
        <div style='font-size: 40px;font-family:"Dancing Script", cursive;' >${name[i]}</div>
        <div style="border: 1px solid black;width:90px;height:20px;border-radius:5px;font-size:20px;padding:7px;"align="center";>Save</div>
    </div>
        <div style="display: flex;justify-content: center;padding-top: 50px;">
            <img src="images/${images[i]}" height="400px"width=800px>
        </div>
    </div>`
}
document.querySelector(".page3").innerHTML=code;