package HandleJson;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

import com.google.gson.Gson;
import com.google.gson.JsonArray;
import com.google.gson.JsonObject;

public class GetJson {
	public static void main(String[] args) throws IOException {
		// Reading JSON from file system
		BufferedReader br = new BufferedReader(
				new FileReader("D:\\Users\\Roni\\3D Objects\\libJar-executeSQL\\teste.json"));
		String line;
		StringBuilder sbuilderObj = new StringBuilder();
		while ((line = br.readLine()) != null) {
			sbuilderObj.append(line);
		}
		System.out.println("Original Json ::" + sbuilderObj.toString());

		JsonObject gsonObj = new Gson().fromJson(sbuilderObj.toString(), JsonObject.class);

		System.out.println("-----------------------------");

		String databaseNome = gsonObj.get("nome").getAsString();
		String databaseUrl = gsonObj.get("url").getAsString();
		String databasePorta = gsonObj.get("porta").getAsString();
		String databaseUsuario = gsonObj.get("usuario").getAsString();
		String databaseSenha = gsonObj.get("senha").getAsString();
		String databaseSGBD = gsonObj.get("sgbd").getAsString();

		System.out.println("###### Database ############");
		System.out.println("databaseNome     : " + databaseNome);
		System.out.println("databaseUrl : " + databaseUrl);
		System.out.println("databasePorta      : " + databasePorta);
		System.out.println("databaseUsuario      : " + databaseUsuario);
		System.out.println("databaseSenha      : " + databaseSenha);
		System.out.println("databaseSGBD      : " + databaseSGBD);

		// tabelas

		JsonArray tabela = gsonObj.getAsJsonArray("tabela");

		for (int i = 0; i < tabela.size(); i++) {
			System.out.println("Tabela " + (i+1));
			String tabelaNome = tabela.get(i).getAsJsonObject().get("nome").getAsString();
			System.out.println("nomeTabela : " + tabelaNome);

			JsonArray coluna = tabela.get(i).getAsJsonObject().getAsJsonArray("coluna");

			// colunas
			for (int j = 0; j < coluna.size(); j++) {
				System.out.println("Coluna " + (j + 1));
				String colunaNome = coluna.get(j).getAsJsonObject().get("nome").getAsString();
				String colunaTipo = coluna.get(j).getAsJsonObject().get("tipo").getAsString();
				System.out.println("colunaNome : " + colunaNome);
				System.out.println("colunaTipo : " + colunaTipo);
			}

		}

	}
}
