package HandleJson;

import java.io.File;
import java.io.IOException;

import com.fasterxml.jackson.databind.ObjectMapper;


public class GetJsonJackson {
	public static void main(String[] args) {

		ObjectMapper objectMapper = new ObjectMapper();

		try {
			Json empParentObj = objectMapper
					.readValue(new File("D:\\Users\\Roni\\3D Objects\\libJar-executeSQL\\teste.json"), Json.class);
			// Print info directly
			System.out.println("###### Emp Info Jackson############");
			System.out.println("Emp Name     : " + empParentObj.getDatabase().getNome());
			System.out.println("Emp Age      : " + empParentObj.getDatabase().getUrl());
			System.out.println("Emp Age      : " + empParentObj.getDatabase().getPorta());
			System.out.println("Emp Age      : " + empParentObj.getDatabase().getUsuario());
			System.out.println("Emp Age      : " + empParentObj.getDatabase().getSenha());
			System.out.println("Emp Age      : " + empParentObj.getDatabase().getSgbd());

		} catch (IOException e) {
			e.printStackTrace();
		}
		
	}
}
