using System;
using System.Collections;
using System.Net;
using System.Net.Sockets;
using UnityEngine;


public class AsynchronousClient : MonoBehaviour
{
    public bool OkayToTick = false;
    public static AsynchronousClient Instance;
    public float TickFreq;

    public string LobbyRoom;

   

    void Start()
    {
        Instance = this;
        msg("Client Started");




    }


    public IEnumerator Tick()
    {
        OkayToTick = false;
        RequestRoomLog();
        yield return new WaitForSeconds(TickFreq);
        OkayToTick = true;
    }

    public string RequestRoomLog()
    {
    string data =   Send("RequestRoomLog:" + RoomLogManager.Instance.sLogList.Count.ToString());

        if (data.Length != 0)
        {


            RoomLogManager.Instance.ReadLog(data);
        }
        return data;
    }

    void Update()
    {
        if (OkayToTick)
        {
            StartCoroutine(Tick());
        }
    }


    public string Send(string message)
    {
        message = NetworkManager.Instance.cPlayer.sName + ">" + NetworkManager.Instance.sRoomName + ">" + message;
      NetworkManager.Instance._ConnectionStatus = NetworkManager.ConnectionStatus.Connected;

        System.Net.Sockets.TcpClient clientSocket = new System.Net.Sockets.TcpClient();

        IPAddress ip = IPAddress.Parse("86.12.183.129");

        //   Debug.Log(ip.ToString());


        clientSocket.Connect(ip, 8888);
        Debug.Log("Client Socket Program - Server Connected ...");

        NetworkStream serverStream = clientSocket.GetStream();
        byte[] outStream = System.Text.Encoding.ASCII.GetBytes(message + "<EOF>");
        serverStream.Write(outStream, 0, outStream.Length);
        serverStream.Flush();

        byte[] inStream = new byte[1024];
        //    serverStream.Read(inStream, 0, (int)clientSocket.ReceiveBufferSize);
        serverStream.Read(inStream, 0, 1024);


        
        string returndata = System.Text.Encoding.ASCII.GetString(inStream);

        string[] splitReturnData = returndata.Split("<".ToCharArray());

        returndata = splitReturnData[0];

        msg(returndata);


        return returndata;
    }

    public void msg(string mesg)
    {
        Debug.Log(Environment.NewLine + " >> " + mesg);
    }
}
