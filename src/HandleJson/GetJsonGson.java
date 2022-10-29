package HandleJson;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;

import com.google.gson.Gson;
import com.google.gson.JsonArray;
import com.google.gson.JsonObject;

public class GetJsonGson {
	  public static void main(String[] args) throws IOException {
	    	//Reading JSON from file system      
	        BufferedReader br=new BufferedReader(new FileReader("D:\\Users\\Roni\\3D Objects\\libJar-executeSQL\\teste.json"));            
	        String line;  
	        StringBuilder sbuilderObj = new StringBuilder();
	        while((line=br.readLine()) !=null){
	            sbuilderObj.append(line);
	        }
	        System.out.println("Original Json ::"+sbuilderObj.toString());  
	       
	        
	        
	        //Gson Object
	
	    
	        JsonObject gsonObj = new Gson().fromJson(sbuilderObj.toString(), JsonObject.class);
	 
	        String dtbNome = gsonObj.get("nome").getAsString();
	        String dtbUrl=  gsonObj.get("url").getAsString();
	        String dtbPorta = gsonObj.get("porta").getAsString();
	 
	        System.out.println("###### Emp Info Gson ############");
	        System.out.println("Emp Name     : "+dtbNome);
	        System.out.println("Emp Position : "+dtbUrl);
	        System.out.println("Emp Age      : "+dtbPorta);
	 
	       
//	        JsonArray jsonArray = gsonObj.getAsJsonArray("skills");
//	        for (int i = 0; i < jsonArray.size(); i++) {
//	            String programming = jsonArray.get(i).getAsJsonObject().get("programming").getAsString();
//	            String scripting = jsonArray.get(i).getAsJsonObject().get("scripting").getAsString();
//	            String ml = jsonArray.get(i).getAsJsonObject().get("ml").getAsString();
//	            System.out.println("###### Emp Skills (nested) ###########");
//	            System.out.println("Programming : "+programming);
//	            System.out.println("Scripting   : "+scripting);
//	            System.out.println("Ml          : "+ml);
//	 
//	        }
	  }
}
