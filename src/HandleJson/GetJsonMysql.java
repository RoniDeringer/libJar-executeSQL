package HandleJson;

import java.io.IOException;
import java.util.ArrayList;
import com.google.gson.JsonArray;
import com.google.gson.JsonObject;

public class GetJsonMysql implements GetJsonInterface {

    public Database populaObjeto(JsonObject gson) throws IOException {

        Database database = new Database();

        database.setNome(gson.get("nome").getAsString());
        database.setUrl(gson.get("url").getAsString());
        database.setPorta(gson.get("porta").getAsInt());
        database.setUsuario(gson.get("usuario").getAsString());
        database.setSenha(gson.get("senha").getAsString());
        database.setSgbd(gson.get("sgbd").getAsString());
        
        System.out.println("teste");
        System.out.println(database);
        
        // tabelas
        JsonArray arrayTabelas = gson.getAsJsonArray("tabela");
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
