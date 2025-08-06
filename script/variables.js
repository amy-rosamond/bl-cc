const switchVariables = () => {
    const background = getComputedStyle(document.documentElement).getPropertyValue('--background');
    let sections;
    switch(background){
        case '#fff':
            sections = [["--background", "#000"],["--text", "#fff"],["--mode", "#fff"],["--grey", "rgb(57, 57, 57)"],["--black-yellow", "rgb(251, 251, 114)"],["--blue-yellow", "rgb(251, 251, 114)"]];
        break;
        default:
            sections = [["--background", "#fff"],["--text", "#000"],["--mode", "#000"],["--grey", "rgb(229, 232, 236)"],["--black-yellow", "#000"],["--blue-yellow", "rgb(56, 151, 200)"]];
        break;
    }
    sections.forEach(sections =>{ document.documentElement.style.setProperty(sections[0], sections[1]);});
}
