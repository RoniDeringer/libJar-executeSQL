package HandleJson;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;

import com.google.gson.*;

public class GetJson {

	private JsonObject generateGson() throws IOException {
		BufferedReader br = new BufferedReader(new FileReader(
				"D:\\Users\\Roni\\3D Objects\\libJar-executeSQL\\generated_json_2022-10-19 02_45_28.json"));
		String line;
		StringBuilder sbuilderObj = new StringBuilder();
		while ((line = br.readLine()) != null) {
			sbuilderObj.append(line);
		}
//		System.out.println("Original Json ::" + sbuilderObj.toString());

		JsonObject gsonObj = new Gson().fromJson(sbuilderObj.toString(), JsonObject.class);
		return gsonObj;
	}
	// Reading JSON from file system

	
	public Database populaObjeto() throws IOException {

		JsonObject gsonObj = this.generateGson();

		Database database = new Database();

		database.setNome(gsonObj.get("nome").getAsString());
		database.setUrl(gsonObj.get("url").getAsString());
		database.setPorta(gsonObj.get("porta").getAsInt());
		database.setUsuario(gsonObj.get("usuario").getAsString());
		database.setSenha(gsonObj.get("senha").getAsString());
		database.setSgbd(gsonObj.get("sgbd").getAsString());

		// tabelas

		JsonArray arrayTabelas = gsonObj.getAsJsonArray("tabela");
		ArrayList<Tabela> listTabela = new ArrayList<Tabela>();

		for (int i = 0; i < arrayTabelas.size(); i++) {
			Tabela tabela = new Tabela();
			tabela.setNome(arrayTabelas.get(i).getAsJsonObject().get("nome").getAsString());
			JsonArray arrayColunas = arrayTabelas.get(i).getAsJsonObject().getAsJsonArray("coluna");

			// colunas

			ArrayList<Coluna> listColuna = new ArrayList<Coluna>();

			for (int j = 0; j < arrayColunas.size(); j++) {
				Coluna coluna = new Coluna();
				coluna.setNome(arrayColunas.get(j).getAsJsonObject().get("nome").getAsString());
				coluna.setNotNull(arrayColunas.get(j).getAsJsonObject().get("isNotNull").getAsBoolean());
				coluna.setTipo(arrayColunas.get(j).getAsJsonObject().get("tipo").getAsString());

				listColuna.add(coluna);

			}
			tabela.setColuna(listColuna);
			listTabela.add(tabela);

		}
		database.setTabela(listTabela);
		return database;
	}

}
