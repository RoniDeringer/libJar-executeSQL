package HandleJson;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import com.google.gson.Gson;
import com.google.gson.JsonObject;

public class ChoiceDatabase {

    
    private JsonObject gson;

    public Database ChoiceDatabase() throws IOException {
        String nameDatabase = this.getNameDatabase();
        
        switch (nameDatabase) {
            case "MYSQL": {
                return new GetJsonMysql().populaObjeto(this.getGson());
            }
            default:
                String erro = "Contate um administrador";
        }
        return new Database(); //error
    }

    public String getNameDatabase() throws IOException {
        JsonObject gsonObj = this.generateGson();
        return (gsonObj.get("sgbd").getAsString());
    }

    public JsonObject generateGson() throws IOException {
        BufferedReader br = new BufferedReader(new FileReader("D:\\\\Users\\\\Roni\\\\3D Objects\\\\libJar-executeSQL\\\\generated_json_2022-10-19 02_45_28.json"));
        String line;
        StringBuilder sbuilderObj = new StringBuilder();
        while ((line = br.readLine()) != null) {
            sbuilderObj.append(line);
        }

        this.setGson(new Gson().fromJson(sbuilderObj.toString(), JsonObject.class));
        return this.getGson();
    }

    public JsonObject getGson() {
        return gson;
    }

    public void setGson(JsonObject gson) {
        this.gson = gson;
    }

    
}
