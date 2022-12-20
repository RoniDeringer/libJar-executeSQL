package HandleJson;

import com.google.gson.JsonObject;
import java.io.IOException;

public interface GetJsonInterface {
	public Database populaObjeto(JsonObject gson) throws IOException;
}
