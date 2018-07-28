package brayana.app.com.brayana;

import android.os.Bundle;


import org.apache.cordova.DroidGap;


import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.util.Log;
import android.view.Menu;

public class MainActivity extends DroidGap {

	private static boolean ENABLE_RESTART;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //super.loadUrl("file:///android_asset/www/index.html");
		super.setStringProperty("loadingDialog", "Loading Please Wait...");
        super.loadUrl("file:///android_asset/www/index.html");
    }

    	@Override
	protected void onRestart() {
		super.onRestart();
		System.out.println("HomeActivity.onRestart()");
		
	 
		if(Tracker.isQuit)
		{
			//android.os.Process.killProcess(android.os.Process.myPid());
			finish();
		}
		
		
		Log.v("enter into restart", "-----HomeActivity.onRestart()---------");
		
		//restartMain();
	}
	
	
	public void restartMain(){
		
		MainActivity.ENABLE_RESTART = true;
		
		  if(ENABLE_RESTART == true){
		   Intent mainIntent = new Intent(this, MainActivity.class);
		   mainIntent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP  );
		   startActivity(mainIntent);
		   //finish();
		  }else{
		   finish();
		  }
		  ENABLE_RESTART   = false;
		}


	/*	@Override
 protected void onResume() {
    super.onResume();

    restartMain();
}*/


@Override
 protected void onPause() {
    super.onPause();

    finish();
}


}
