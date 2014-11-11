package com.example.sleepapp;

import android.support.v7.app.ActionBarActivity;
import android.annotation.SuppressLint;
import android.graphics.Bitmap;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.webkit.WebView;
import android.webkit.WebViewClient;

@SuppressLint("SetJavaScriptEnabled") public class FirstPageActivity extends ActionBarActivity {
	private String uagent = "Mozilla/5.0(Linux; U; Android 2.0; en-us; Droid Build/ESD20)" +
			"AppleWebKit/530.17(KHTML, like Gecko) Version 4.0 Mobile Safari/530.17";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.first_page);
        displayFirstPage();
    }

    
    public class myWebClient extends WebViewClient
    {
        @Override
        public void onPageStarted(WebView view, String url, Bitmap favicon) {
            // TODO Auto-generated method stub
            super.onPageStarted(view, url, favicon);
        }
 
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            // TODO Auto-generated method stub
 
            view.loadUrl(url);
            return true;
 
        }
    }
    
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.first_page, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();
        if (id == R.id.action_settings) {
            return true;
        }
        return super.onOptionsItemSelected(item);
    }


private void displayFirstPage(){
	WebView mWebView = (WebView) findViewById(R.id.webView1);
	mWebView.setWebViewClient(new WebViewClient()); //with this you make the webpage NOT open in the browser, 
	//but in the app
	mWebView.getSettings().setJavaScriptEnabled(true);
	//dirty-hack to get around Twitter page load bug when user agent is unknown
	mWebView.getSettings().setUserAgentString(uagent);
	mWebView.loadUrl("http://andreilazar.dk/sleepadvisor");
}
}
