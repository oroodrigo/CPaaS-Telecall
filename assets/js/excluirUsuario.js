export default async function excluirUsuario(id) {
  const req = await fetch("../server/excluir.php", {
    method: "DELETE",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      id: id,
    }),
  });

  const res = await req.json();

  return res;
}
