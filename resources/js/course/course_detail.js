function displayVideoLesson()
{
    let content = event.target.getAttribute("data-content");
    let videoFrame = document.getElementsByTagName('iframe')[0];
    videoFrame.src = content;
}

function displayTextLesson()
{
    let content = event.target.getAttribute("data-content");
    let textPara = document.getElementsByClassName('text-lesson')[0];
    let textLesson = document.createTextNode(content);
    textPara.appendChild(textLesson);
}
