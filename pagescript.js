console.log(14);
const A31 = [1,3,5,7,8,10,12]
const A30=[4,6,9,11]


let iselectmonth=0;
function selectmonth(){
    if(iselectmonth==0){
        iselectmonth=1;
    }
    else{
        iselectmonth=0;
        for(let i=1;i<13;i++){
            let e=document.getElementById(i+"m")
            let j31=document.getElementById("j31")
            let j30=document.getElementById("j30")
            let j29=document.getElementById("j29")
            if(e.selected){
                if(A31.includes(i)){
                    j31.style.display="block"
                    j30.style.display="block"
                    j29.style.display="block"
                }
                if(A30.includes(i)){
                    j31.style.display="none"
                    j30.style.display="block"
                    j29.style.display="block"
                    
                }
                if(i==2){
                    j31.style.display="none"
                    j30.style.display="none"
                    console.log("2");
                }
                
            }
        
        }

    }

}


function movsb(e){                 //mouse over submit button
   
    e.style.color="#00B5E2"
    e.style.border.style="solid"


}
function motsb(e){//mouse out submit button
    
    e.style.color="white";


}  
function CommentAndSubButtonDisplay(){              //display comment and submission button
    let e=document.getElementsByTagName("textarea")[0];
    e.style.display="block";
    e=document.getElementsByClassName("submitbutton")[1];
    e.style.display="block";

}
function movct(e){                         // ct = comment text
    e.style.color="white";
}
function motct(e){
    e.style.color="black";
}

function displayds(e){
    if(document.getElementById("e"+e.id).style.display=="none"){
        document.getElementById("e"+e.id).style.display="block"
        document.getElementById("c"+e.id).style.display="block"
    }
    else{
        document.getElementById("e"+e.id).style.display="none"
        document.getElementById("c"+e.id).style.display="none"

    }

}

   
var cr = localStorage.getItem("cr");  //it decides wich page i m on
document.getElementById("cour").href="cour_"+cr+".html";
document.getElementById("td").href="td_"+cr+".html";
document.getElementById("exam").href="exam_"+cr+".html";
if(document.getElementById("ds")!=null){
    document.getElementById("ds").href="ds_"+cr+".html";
}
if(document.getElementById("tp")!=null){
    document.getElementById("tp").href="tp_"+cr+".html";
}






