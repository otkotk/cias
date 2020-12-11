


/** 機能の説明
 * 画像を挿入する<input>を、中央寄せする
 */
let p_i_input_img = document.getElementsByClassName("p_i_input_img");
let post_file = document.getElementsByClassName("post_file");
let p_i_p = document.getElementsByClassName("p_i_p");
console.log(p_i_input_img[0].getBoundingClientRect().width - post_file[0].getBoundingClientRect().width);

window.onload = p_i_pCentering(0);

function p_i_pCentering(num){
    let centering_width = (p_i_input_img[num].getBoundingClientRect().width - p_i_p[num].getBoundingClientRect().width) / 2 + "px";
    let centering_height = (p_i_input_img[num].getBoundingClientRect().height - p_i_p[num].getBoundingClientRect().height) / 2 + "px";
    p_i_p[num].style.left = centering_width;
    p_i_p[num].style.top = centering_height;
}



/** 昨日の説明
 * 画像を表示する
 */
// let post_file = document.getElementsByClassName("post_file");
let post_img = document.getElementsByClassName("post_img");

for(let i=0; i<post_file.length; i++)
{
    post_file[i].addEventListener("change", function(e)
    {
        let file = e.target.files[0];
        let fileReader = new FileReader();
        
        fileReader.readAsDataURL(file);
        
        fileReader.onload = function()
        {
            let dataUri = this.result;
            post_img[i].src = dataUri;
        }
    });
}