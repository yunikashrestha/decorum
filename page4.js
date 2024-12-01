let name=['Modern Coastal  Bedroom Interior Design','Classy Black And  White Bedroom Interior Design','Floral Eclectic Bedroom Interior Design','Contemporary White Bedroom Interior Design'];
let images=['modern.jpg','blackk.jpg','floral.jpg','cont.webp'];
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
document.querySelector(".page4").innerHTML=code;