if (file_exists($pagina)) {
    include $pagina;
} else {
    echo "<h2>Página não encontrada</h2>";
    echo "<p>O conteúdo que você procurou não existe ou foi movido.</p>";
    echo "<a href='index.php'>Voltar ao início</a>";
}
