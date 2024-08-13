function exclusao(numero_exclusao){
    const urlParams = new URLSearchParams(window.location.search);
    const nome = urlParams.get("nome");
    const turma = urlParams.get("turma");
    const pagina = urlParams.get("pagina");
    const url = "t_exclusao_turma.php?&id="+numero_exclusao+"&nome="+nome+"&turma2="+turma+"&pagina="+pagina;
    console.log(url);
    window.location.href = url;
}
function passarmenos(){
    const urlParams = new URLSearchParams(window.location.search);
    const nome = urlParams.get("nome");
    const turma = urlParams.get("turma");
    const pagina1 = urlParams.get("pagina");
    const pagina = pagina1 - 1;
    if(pagina == 0){
        const pagina = 1;
        return pagina;  
    }
    const url = "t_turma.php?nome="+nome+"&turma="+turma+"&pagina="+pagina;
    console.log(url);
    window.location.href = url;
}
function passarmais(){
    const urlParams = new URLSearchParams(window.location.search);
    const nome = urlParams.get("nome");
    const turma = urlParams.get("turma");
    const pagina1 = parseInt(urlParams.get("pagina"));
    const pagina = pagina1 + 1;
    const url = "t_turma.php?nome="+nome+"&turma="+turma+"&pagina="+pagina;
    console.log(url);
    window.location.href = url;
}