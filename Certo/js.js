function exclusao(numero_exclusao){
    const urlParams = new URLSearchParams(window.location.search);
    const nome = urlParams.get("nome");
    const turma = urlParams.get("turma");
    const pagina = urlParams.get("pagina");
    const url = "t_exclusao_turma.php?&id="+numero_exclusao+"&nome="+nome+"&turma2="+turma+"&pagina="+pagina;
    console.log(url);
    window.location.href = url;
}