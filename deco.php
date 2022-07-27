<?php
error_reporting(0);
$r ="\033[1;31m";//đỏ
$g ="\033[1;32m";//xanh lá
$y ="\033[1;33m";//vàng
$b ="\033[1;34m";//xanh dương
$p ="\033[1;35m";//hồng
$xn="\033[1;36m";//xanh dương nhạt
$w ="\033[1;37m"; //trắng
//
// open this file
$fp = fopen(__FILE__, 'rb');
// seek file pointer to data
fseek($fp, __COMPILER_HALT_OFFSET__);
// and output it
$eval1_phppro = base64_decode(stream_get_contents($fp));
eval($eval1_phppro);
//
function slow($text)
{
    foreach (str_split($text) as $val){
    echo $val; 
    usleep(5000);
	}
}
//
function FOUT($fname,$chuoi)
{
	return file_put_contents($fname,$chuoi);
}
//
function FIN($fname)
{
	return file_get_contents($fname);
}
//
function tach($start,$end,$chuoi)
{
	$tach = explode($end,explode($start,$chuoi)[1])[0];
	return $tach;
}
//
function zzdecode($chuoi,$fname,$aa)
{
	$ndaa = explode("'))",substr($chuoi, strpos($chuoi,"('")+2,strlen($chuoi)))[0];
	if($ndaa!=="")
	{$nda = '$a'." = $aa('".$ndaa."');"."file_put_contents('".$fname."',".'$a);';
	eval($nda);
	}
}
//
function GHI($chuoi,$fname)
{
	$mf = fopen($fname,"a");
	fwrite($mf, "\n\n\n".$chuoi);
	fclose($mf);
}
//
function NFILE()
{
	while(true)
	{
		system('clear');
		$fname = readline ("\033[1;37mNHẬP TÊN FILE: ");echo "\n";
		if(file_exists($fname))
		{
			$data = FIN($fname);
			return array($fname,$data);
			break;
		}
		else{echo "\033[1;31mFile $fname không tồn tại \n";sleep(2);}
	}
}
//
function run($code)
{
	$code = gzuncompress($code);//1
	$code = gzinflate($code);//2
	$code = str_replace(array("⋈", "⋇", "⋆", "⋅", "⋄", "⋃", "⋂", "⋁", "⋀", "⊿", "⊾", "⊷", "⊶", "⊵", "⊴", "⊳", "⊲", "⊱", "⊰", "⊯", "⊮", "⊭", "⊬", "⊫", "⊪", "⊩", "⊨", "⊧", "⊦", "⊥", "⊤", "⊣", "⊢", "⊡", "⊠", "⊟", "⊞", "⊝", "⊜", "⊛", "⊚", "⊙", "⊘", "⊗", "⊖", "⊕", "⊒", "⊑", "⊐", "⊏", "⊋", "⊊", "⊉", "⊈", "⊇", "⊆", "⊅", "⊄", "⊃", "⊂", "⊁", "⊀"), array("z", "y", "x", "w", "R", "Q", "P", "v", "u", "t", "s", "o", "n", "m", "Z", "Y", "X", "W", "V", "U", "T", "S", "r", "q", "p", "O", "N", "M", "l", "k", "j", "I", "H", "G", "L", "K", "J", "f", "e", "d", "9", "8", "4", "F", "E", "D", "c", "b", "a", "0", "3", "2", "1", "i", "h", "g", "7", "6", "5", "C", "B", "A"), $code);//3
	$code = base64_decode($code);//4
	$code = base64_decode($code);//5
	$code = gzinflate($code);//6
	$code = zlib_decode($code);//7
	$code = gzuncompress($code);//8
	$code = base64_decode($code);//9
	$code = gzuncompress($code);//10
	return $code;
}
//
system('clear');
for($i=0;$i<5;$i++)
{
	foreach(["҉ -","҉  -","҉   -"] as $val)
	{
		echo "
		$xn _/﹋\_	$w-Pèng   -Pèng
		$y (҂`_´)
		$y <,︻╦╤─$r $val
		$y _/﹋\_\n";
		usleep(50000);
		system("clear");
	}
}
//
$vers = "3";
$baner = $g."
◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈
◈       ~~~~~~Name: ".$r."LÊ TIẾN THÀNH".$g."~~~~~~       ◈
◈          ~~~~~~☎: ".$r."0362901032 ".$g."~~~~~~         ◈
◈     ~~~~~~Email:".$r."thanhqw032@gmail.com".$g."~~~~~~  ◈
◈          ~~~~~~Nhóm Tool:".$r."LHKT".$g."~~~~~~         ◈
◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈◈
"."\n";
$tool_app = $y."     	◈◈◈ ".$b."Tool app: ".$xn."DECODE V$vers".$y." ◈◈◈\n".$g;

while(true)
{
	system('clear');
	echo $baner.$tool_app."\n";
	sleep(1);
	echo $y."================== LỰA CHỌN MỤC ================"."\n".$g;
	echo "[1] DECODE kakatoji"."\n";
	echo "[2] DECODE Alom"."\n";
	echo "[3] DECODE enphppro"."\n";
	echo "[4] DECODE tool.eddiekidiw.com"."\n";
	echo "[5] DECODE en.yenpro.net"."\n";
	$CHON = readline("CHỌN: ");
	if($CHON!=='' and $CHON==(1 or 2 or 3 or 4 or 5)){break;}
}
sleep(1);
//
$Dvao  = NFILE();
$fname = $Dvao[0];
$name  = str_replace('.php','',$fname);
$data  = $Dvao[1];
system('clear');
echo $baner.$tool_app."\n";
sleep(2);
//
switch($CHON)
{
	case 1:
	//check data
	$meval = array('EVAL','eval','Eval','eVal','evAl','evaL','evAL','eVAl','EVal','EvaL','EVAl','EVaL','EvAL','eVAL');
	foreach ($meval as $val)
	{
		$ceval = substr_count($data,$val);
		if($ceval>0){$EVA = $val; echo $w."Tìm thấy $g$ceval$w | $p$val$g \n";break;}
	}
	if($ceval==0){echo $r."Không tìm thấy $p".'eval'."$g \n";exit;}

	$code[1] = tach('<?php',$EVA.'(',$data);	//FOUT('1.php',$code[1]);
	for($i=2;$i<$ceval+2;$i++)
	{
		if($i==4){$dauc ='0);';}else{$dauc ='));';}
		$code[$i] = tach($code[($i-1)],$dauc,$data).$dauc;	//FOUT("$i.php",$code[$i]);
	}
	sleep(1);
	//tìm từ khóa
	if(substr_count($code[1],'\x67\x7a\x75\x6e\x63\x6f\x6d\x70\x72\x65\x73\x73')>0){$aa='gzuncompress';}
	if(substr_count($code[1],'\x67\x7a\x64\x65\x63\x6f\x64\x65')>0)				   {$aa='gzdecode';}
	echo $w."Từ khóa    | ".$y.$aa."\n\n";


	//tìm 2 số & chạy data 1234
	$tbien3  = explode('=',$code[3])[0];
	$tbien4  = explode('=',$code[4])[0];
	$cut1 = '?>'.str_replace($code[6].$code[7].$code[8]," ",$data);
	eval($cut1.'$bien3 = '.$tbien3.';$bien4 = '.$tbien4.';');
	FOUT('a1.php','?><?php'.$code[1]."\n".$tbien3." = $bien3;".$tbien4." = $bien4;");

	sleep(1);
	//giải từng cái EVAL
	for($j=2;$j<$ceval+2;$j++)
	{
		$ceval2 = substr_count($code[$j],$EVA);//echo $ceval2;
		if($ceval2==0){echo "$r KHÔNG TÌM THẤY NỘI DUNG $j ... VUI LÒNG LÀM TAY  ^_^! \n";exit;}
		if($ceval2 == 1)
		{
			zzdecode($code[$j],"a$j.php",$aa);
		}
		if($ceval2 > 1){echo "DẠNG MỚI CHỊU KK";}
		$dga[$j] = FIN("a$j.php");
		if(substr_count($dga[$j],'(0x000)')==1 and substr_count($dga[$j],'(int)')==1 and substr_count($dga[$j],$EVA.'(')>=1)
		{$k = $j;}
	}
	//bỏ return
	$boturn = str_replace("return".strrev(explode('nruter',strrev($dga[4]))[0]),"",$dga[4]);
	FOUT("a4.php",$boturn);

	//SỬA BIẾN THÀNH link dẫn bot
	if(substr_count($dga[2],'):"";')==1 and substr_count($dga[2],'??"")?$')==1)
	{
		$thbien = strrev(explode('=',strrev($dga[2]))[0]);
		$dtbien = str_replace($thbien,"file_get_contents('$fname');",$dga[2]);
		eval($dtbien);
		FOUT("a2.php",$dtbien);
	}
	//TÁCH A4 LÀM 2 | A4 : A5
	$cat1 = substr($dga[$k],strpos($dga[$k],$EVA.'('),strlen($dga[$k]));
	$cat2 = str_replace($cat1," ",$dga[$k]);
	FOUT("a$k.php",$cat2);//A4
	eval($cat2);
	$k++;
	FOUT("a$k.php","?><?php ".$cat1);//A5
	//GIẢI TÌM BIẾN CUỐI
	if($k==""){echo $r."KHÔNG TÌM THẤY ĐOẠN CHỨA BIẾN CUỐI @@ \n";exit;}
	else
	{
		$dso = 1;
		while($k<10)
		{
			$cat3 = FIN("a$k.php");
			if($cat3==''){break;}
			else
			{
				echo $g."GIẢI Lớp: $dso  |  ";
				FOUT("c.php",$cat3);
			}
			$cat4 = '?><?php $bia1 =('.ltrim($cat3,'?><?php '.$EVA.'(');
			$dk1  = substr_count($cat3,$EVA.'(');//eval(
			$dk2  = substr_count($cat3,'));'.$EVA.'(');//));eval(
			$dk3  = substr_count($cat3,"('");//('
			if($dk1==0){break;}
			if($dk1==1 and $dk2==0)
			{
				echo $xn."LOẠI 1 \n";
				$type = 1;
			}
			if($dk1==2 and $dk2==0)
			{
				echo $xn."LOẠI 2 \n";
				$type = 1;
			}
			if($dk1>2 and $dk2==0 and $dk3==1)
			{
				echo $xn."LOẠI 3 \n";
				$type = 1;
			}
 			if($dk1==3 and $dk2==1 and $dk3==1)
			{
				echo $xn."LOẠI 4 \n";
				$type = 1;
			}
			if($dk1>2 and $dk2==1 and $dk3==2)
			{
				echo $xn."LOẠI 5 \n";
				$type = 2;
			}
			if($dk1==2 and $dk2==1)
			{
				echo $xn."LOẠI 6 \n";
				$type = 2;
			}
////////
			if($type == 1)
			{
				eval($cat4);
				if($bia1!=="")
				{FOUT("a$k.php",$bia1);}
				unset($type);
			}
			if($type == 2)
			{
				$cat5 = str_replace('));'.$EVA.'(','));$bia2 = (',$cat4);
				eval($cat5);
				if(substr_count($bia1,$EVA.'(')==0){$out1=$bia1; $out2=$bia2; } else{$out1=$bia2; $out2=$bia1; }
				FOUT("a$k.php",$out1);//A6
				$k++;
				FOUT("a$k.php",$out2);//A7
				unset($type);
			}
			$dso++;
		}
		$bia3 = FIN("c.php");
		if($bia3!=="")
		{
			$cat6 = str_replace($EVA.'(','$biacuoi = (',$bia3);
			FOUT("biencuoi.php",$cat6);
			GHI('file_put_contents("'."$name".'-OK.php",$biacuoi);',"biencuoi.php");
		}
		else
		{echo $r."Không tìm thấy biến cuối \n\n";}
	}

	if(file_exists("biencuoi.php"))
	{
		if(file_exists("tong.php")){unlink("tong.php");}
		for($u=1;$u<20;$u++)
		{
			$chuoi = FIN("a$u.php");
			if($chuoi==""){break;}
			GHI($chuoi,"tong.php");
		}
		GHI(FIN("biencuoi.php"),"tong.php");
	}

	system('php tong.php');

	if(FIN("$name-OK.php")!=="")
	{
		for($i=1;$i<15;$i++)
		{
			//unlink("$i.php");
			unlink("a$i.php");
		}
		unlink("c.php");
		unlink("tong.php");
		unlink("biencuoi.php");
	}
	break;
//////////////////////////////////////////////////////////////////////////////////////////////////
	case 2:
	//tìm từ khóa
	$tuk0 = 'AlomDecoder';
	$tuk1 = tach('class_exists("','")',$data);
	$tuk2 = explode('AlomDecoder',$tuk1)[1];
	echo $w."Từ khóa    | ".$y.$tuk1."\n";
	echo $w."Từ khóa    | ".$y.$tuk2."\n\n";

	//ổ chứa
	$dir = __DIR__;
	$ch = substr_count($dir,'/');
	if($ch>=1){$daus = '/';}
	else{$daus = '\\';}
	FOUT('file.txt',$dir.$daus.$fname);
	FOUT('dir.txt',$dir.$daus);

	//CẮT GIẢI ĐOẠN 1
	$doan1 = tach("('","')",$data);
	$doan1 = str_replace("AlomDecoder",$tuk1,gzinflate(base64_decode($doan1)));file_put_contents('d.php',$doan1);
	$doan1 = str_replace(",__FILE__)",",file_get_contents('file.txt'))",$doan1);
	$doan1 = str_replace("__DIR__","file_get_contents('dir.txt')",$doan1);
	if(substr_count($doan1,'$_a96e1')>=1){$bian='$_a96e1';}
	if(substr_count($doan1,'$_d8ea0')>=1){$bian='$_d8ea0';}
	if($bian==""){echo $r."KHÔNG TÌM THẤY BIẾN ẨN ...! \n";exit;}
	$doan1 = str_replace('if('."$bian".'){','if('."$bian".'){file_put_contents("'."$name".'-OK.php",$code);',$doan1);

	//CẮT GIẢI ĐOẠN 2
	$doan2 = substr($data,strpos($data,'\\'.$tuk0),strlen($data));


	//ghep file
	$ghep = "?><?php\n".'if(!class_exists("'."$tuk1".'")){define("ALOM'."$tuk2".'_OUTER_FILE",file_get_contents("file.txt"));define("ALOM'."$tuk2".'_OUTER_DIR",file_get_contents("dir.txt"));'."$doan1}\n\n\n$doan2";
	FOUT("$tuk2.php",$ghep);

	system("php $tuk2.php");

	$codee = FIN("$name-OK.php");
	$codee = str_replace('if(isset($_ALOM_code)){$_ALOM_code='."''".';unset($_ALOM_code);}',"?><?php\n",$codee);
	$codee = str_replace('  return 1;',"\n\n\n",$codee);
	FOUT("$name-OK.php",$codee);

	if(FIN("$name-OK.php")!=="")
	{
		unlink("$tuk2.php");
		unlink("file.txt");
		unlink("dir.txt");
	}
	break;
//////////////////////////////////////////////////////////////////////////////////////////////////
	case 3:
	//lấy code
	$code = tach('session_start();','$_SESSION',$data);
	eval ("?><?php $code");
	$Bcod = tach('$'."{'","'}",$code);
	$code = run(${"$Bcod"});
	//FOUT('check.php',$code);
	//gzinflate
	preg_match_all('/gzinflate(.+?)\)\)/',$code,$mac);
	foreach ($mac[0] as $val)
	{
		eval('$out='.$val.';');
		$tim1 = substr_count($out,'"');
		$tim2 = substr_count($out,"'");
		if($tim1>$tim2)
		{$noac = "'";}
		else
		{$noac = '"';}
		$code = str_replace($val,$noac.$out.$noac,$code);
	}
	$dau = 'gzinflate(';
	$duoi = '))';
	while(true)
	{
		$cou = substr_count($code,$dau);
		if($cou==0){break;}
		$tak = tach($dau,$duoi,$code);
		$imp = $dau.$tak.$duoi;
		eval('$out='.$imp.';');
		
		$tim1 = substr_count($out,'"');
		$tim2 = substr_count($out,"'");
		if($tim1>$tim2)
		{$noac = "'";}
		else
		{$noac = '"';}

		$code = str_replace($imp,$noac.$out.$noac,$code);
	}
	//goto
	preg_match_all('/goto (.+?);/',$code,$mac);
	foreach ($mac[1] as $key => $val)
	{
		$code = str_replace($val,"NHAY".$key,$code);
	}
	//bien
	preg_match_all('/\$(.+?)[ =+.,;\[\]\(\)]/',$code,$mac);
	foreach ($mac[1] as $key => $val)
	{
		$code = str_replace($val,"bien".$key,$code);
	}
	//function
	preg_match_all('/function (.+?)\(/',$code,$mac);
	foreach ($mac[1] as $key => $val)
	{
		$code = str_replace($val,"FUNC".$key,$code);
	}
	//print_r($mac);
	$code = str_replace('goto',"\ngoto",$code);
	FOUT("$name-OK.php",$code);
	echo $g."Code $w$name-OK.php\n$g vẫn còn goto ^_^ !\n";
	break;
//////////////////////////////////////////////////////////////////////////////////////////////////
	case 4:
	
	break;
//////////////////////////////////////////////////////////////////////////////////////////////////
	case 5:
	$nkey = 'eval($_ME_qQ7V($_IAM_gXKBY($_TH_Aj(\'';
	while(true)
	{
		$tim = substr_count($data,$nkey);
		if($tim!==0)
		{
			$tach = explode('\'))));',explode($nkey,$data)[8])[0];
			$data = strrev(gzinflate(base64_decode($tach)));
			FOUT("$name-OK.php","<?php\n".$data);
		}
		else{break;}
	}
	break;
}
//////////////////////////////////////////////////////////////////////////////////////////////////
echo $g."Code giải mã lưu tại $w$name-OK.php$g\nvẫn nhiều lỗi mong m.n thông cảm...!\n";
slow($xn."=======================================================\n");
slow($y."\n XIN CÁM ƠN ĐÃ SỬ DỤNG TOOL DECODE BY LÊ THÀNH ...\n");
slow($w."\n Có làm thì mới có ăn, không làm mà đòi có ăn ...");
slow($w."\n Chỉ có ăn đầu 'xxx'...   Ăn cứt ... :v\n\n");

__halt_compiler();Pz48P3BocApmdW5jdGlvbiBCQU1FTUFZKCT89fHpmbzw9qnI7NLo65iQ8auWncO2yNeTrsq9/p6G4ywgJJCKkonmwdDcqO3wnon/26TYjpir6J2z6L638eKFk9fCID0gIjPchWpceDliXHg5ZVx4YWJceDAxfHtceDhlXHhiOC5ceDg3XHhlOFx4OWNceDEwPFx4OTVceGE5IiwgJO2wo6jFhN6Dy4+p/+2SnbOS+rPc2O7myPPB1Mne86CWID0gZmFsc2UpIHsgZ290byBfwIuwm6T8jjsgX7C1p8DWj4A6IF+NufeJ9bmFOiBnb3RvIF+Snv2HwbH/OyBf9fGsmbn67zogX8aB6fbWyas6IGdvdG8gX4XN1a28ht87IF/8jqT0i/eSOiBf+KjFt6CEnTogZ290byBf/uTn547ByjsgX5vRuYPt1bc6IGdvdG8gX8Gd5p7vyuc7IGdvdG8gX/XfirO20487IF/G9evT4qq2OiBf6a6wnJT89TogZ290byBfgIbjzqfvyjsgX6HCmaLRwM06IF+d5u+3gcSxOiBnb3RvIF++xM2HnZaXOyBfnrDjnvGk8TogJJiDkueRjYnNkPjymNyBv6T5kqKFyNvDp9Dr9uKG0dTqIC49IGNocihvcmQoJJCKkonmwdDcqO3wnon/26TYjpir6J2z6L638eKFk9fCWyTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOar10pIF4gb3JkKCTtttmXxpj24f6o0cWw2Yv2yPHWveuKzJ6zh8W7xdODnlskv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4rK10pKTsgZ290byBfwbjghMCnjjsgX5u2tKyknIo6IGdvdG8gX56wlMr5g/47IGdvdG8gX+ePnJbEkMA7IF+L6fXIq+LKOiBnb3RvIF/SuqDrnJTAOyBnb3RvIF/RwM2KnZ7OOyBf38SHtuSP/zogJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvID0gJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeID0gJIur4qSFr9X2oOCI3IyDj/LC1Ya22ZGWyMTskuun+ZCRID0gMDsgZ290byBfm7a0rKScijsgX+LprPTgyZI6IGdvdG8gX4fTtcSsi5Y7IGdvdG8gX4vp9cir4so7IF/W9uSOvsvjOiBftPCqv+aA6TogZ290byBfhqjk1dP29DsgX+bivrCZ76g6IGlmICgkwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq8gPCAk4Z6zjdKenpLHw+y98Pb1tYmh4uukvsfElay/xfPcoa8pIHsgZ290byBf7PyX6b32hDsgfSBnb3RvIF/IttH7yYGxOyBf4tL5vrm+3jogJPz18emZvPD2qcjs0ujrmJDxq5adw7bI15Ouyr3+nobjID0gc3Vic3RyKCT89fHpmbzw9qnI7NLo65iQ8auWncO2yNeTrsq9/p6G4ywgMCwgJOGes43Snp6Sx8PsvfD29bWJoeLrpL7HxJWsv8Xz3KGvID0gJOGes43Snp6Sx8PsvfD29bWJoeLrpL7HxJWsv8Xz3KGvIC0gNSk7IGdvdG8gX/mlhP/iwbg7IF+48Z6swsSwOiBftojBuPGs0jogZ290byBfq6S43rvk9jsgX9KK7fXIvuM6IF+qloSRubuGOiBnb3RvIF/Kp/yz4/7pOyBfxKT97YqkoTogX/i6rZ3m9pM6IGdvdG8gX6jkjsqogps7IF/C9KSdyorIOiAk4Z6zjdKenpLHw+y98Pb1tYmh4uukvsfElay/xfPcoa8gPSBzdHJsZW4oJPz18emZvPD2qcjs0ujrmJDxq5adw7bI15Ouyr3+nobjKTsgZ290byBf9a259pnM0zsgX47Whq2nvqg6IF/9wsKO5OeOOiBnb3RvIF+48Z6swsSwOyBf+/qK2fH++zogX5u9vZW3uYY6IGdvdG8gX8mztqSWoP87IF/KvIL/hafnOiBnb3RvIF+08Kq/5oDpOyBnb3RvIF/TqMTI0N/EOyBfpL619MDdvTogZ290byBftojBuPGs0jsgZ290byBf/7qz55K8sDsgX+msi7aX1a06IF/SuqDrnJTAOiBnb3RvIF/F9PGenp7nOyBfjtaG0rersDogX4S3ns7N1dE6IGdvdG8gX/DB8f7tju47IF/dwfSMhLfmOiBnb3RvIF/0q+2q0t63OyBnb3RvIF+3h7ObwbeeOyBft/G7iNPTsDogJJiDkueRjYnNkPjymNyBv6T5kqKFyNvDp9Dr9uKG0dTqID0gc2hhMSgkmIOS55GNic2Q+PKY3IG/pPmSooXI28On0Ov24obR1OopOyBnb3RvIF+e66DrgNK5OyBf9rmelvSt9TogZ290byBfjbn3ifW5hTsgZ290byBfxKT97YqkoTsgX8Kw0N6h+J46IF/B/uTEq8WROiBnb3RvIF/7wIbGgczpOyBf3YT/xY2LwDogX6vdhI6Bvb06IGdvdG8gX+L8ltKhpOM7IF/09OuZ0ZHpOiBpZiAoJIur4qSFr9X2oOCI3IyDj/LC1Ya22ZGWyMTskuun+ZCRID09PSA1KSB7IGdvdG8gX9bR7sLS9YE7IH0gZ290byBfucqlpPT9+zsgX/XfirO20486IF/KndHe/4O8OiBnb3RvIF+38buI09OwOyBf06jEyNDfxDogX56wlMr5g/46IGdvdG8gX7vkj9Cw0Oc7IF/X3brIhIPZOiByZXR1cm4gZ3ppbmZsYXRlKCTbnZWM44yhmuTC4uq436nyyMbSu76ejMb8lcb5+8j98Sk7IGdvdG8gX4q51/WnnYI7IF+iwLmkyu3VOiAki6vipIWv1fag4IjcjIOP8sLVhrbZkZbIxOyS66f5kJEgPSAwOyBnb3RvIF+W77estrT1OyBf4pyCncrbjjogZ290byBf46vE/vXKxDsgZ290byBfxvXr0+KqtjsgX4XN1a28ht86IGdvdG8gX/i6rZ3m9pM7IGdvdG8gX+msi7aX1a07IF+o5I7KqIKbOiBpZiAoJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvIDwgJM2vmNGRhoi86YWu5+DFqOGI6fj5h8avpLLl15mZ4sfRKSB7IGdvdG8gX4qD9YPdhJ47IH0gZ290byBfyJP/m/TKgTsgX6ursL+H0vs6IGdvdG8gX8aB6fbWyas7IGdvdG8gX4Tu0P2dt6s7IF+3h7ObwbeeOiBfh4fBztvXzjogZ290byBfwvSkncqKyDsgX/+6s+eSvLA6IF/Kg8LKyNOCOiBnb3RvIF+T65L41dPiOyBfga7ThdKsvzogX8rpiL7F7Pg6IGdvdG8gX9/Eh7bkj/87IF+W77estrT1OiBnb3RvIF+r3YSOgb29OyBnb3RvIF+67JKwnM2+OyBfirnX9aedgjogZ290byBfyr6Vt8q59jsgZ290byBf3YT/xY2LwDsgX8SQrenZvLc6ICTNr5jRkYaIvOmFrufgxajhiOn4+YfGr6Sy5deZmeLH0SA9IHN0cmxlbigkkIqSiebB0Nyo7fCeif/bpNiOmKvonbPovrfx4oWT18IpOyBnb3RvIF+34IKCt8L0OyBfyJP/m/TKgTogZ290byBf+KjFt6CEnTsgZ290byBftoiGm7nTkjsgX6vJu8Tw2sE6ICTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOarysrOyBnb3RvIF+I79vvhMr2OyBf54HO9pPgzTogZ290byBfvfbNue3E+DsgZ290byBfsLWnwNaPgDsgX8qn/LPj/uk6IGdvdG8gX+3pnuOwsLQ7IGdvdG8gX4Gu04XSrL87IF+GqOTV0/b0OiAkwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq8gPSAkv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4gPSAwOyBnb3RvIF/voKDN1cmlOyBfvsTNh52WlzogZ290byBfup6elr/1gzsgZ290byBfxN3VxPHt5DsgX7mn44fvrfU6IF/KvpW3yrn2OiBnb3RvIF+g9PS48az0OyBfxN3VxPHt5DogX9L+5oDTnqI6IGdvdG8gX/vN47Ppq8Q7IF+AhuPOp+/KOiAk/PXx6Zm88PapyOzS6OuYkPGrlp3DtsjXk67Kvf6ehuMgPSBiYXNlNjRfZGVjb2RlKHN0cnJldigk/PXx6Zm88PapyOzS6OuYkPGrlp3DtsjXk67Kvf6ehuMpKTsgZ290byBfuef7gub14DsgX4HkxMinoJM6IGdvdG8gX8jKjoH20OM7IGdvdG8gX//FwN31kvU7IF+B68iEqMWwOiBfwZ3mnu/K5zogZ290byBf1926yISD2TsgX7DmluuEnMU6IF/t6Z7jsLC0OiBnb3RvIF+B3tPN79uEOyBfguacjcG4sTogX578irOOgMI6IGdvdG8gX8qbtOL8loQ7IF+55/uC5vXgOiBnb3RvIF/9wsKO5OeOOyBnb3RvIF/W9uSOvsvjOyBfucqlpPT9+zogZ290byBfsIuzmberyTsgZ290byBf+ISWk7H/ijsgX+L8ltKhpOM6IF+wi7OZt6vJOiBnb3RvIF/ngc72k+DNOyBf1+3vhaf3yjogZ290byBf+Lmbv/iekDsgZ290byBfgevIhKjFsDsgX4OnwbeHgcw6IF+99s257cT4OiBnb3RvIF+hwpmi0cDNOyBfken1uc3S+TogJJiDkueRjYnNkPjymNyBv6T5kqKFyNvDp9Dr9uKG0dTqID0gJNudlYzjjKGa5MLi6rjfqfLIxtK7vp6MxvyVxvn7yP3xID0gIiI7IGdvdG8gX4WBtLC3uYY7IF/Km7Ti/JaEOiBnb3RvIF+7vdHK0rnKOyBnb3RvIF/T4ov00vy7OyBfq6S43rvk9jogZ290byBfh4fBztvXzjsgZ290byBfhJ7wi+bvtzsgX/f7lLf1joQ6IF/vjaqnnt/EOiBnb3RvIF/2uZ6W9K31OyBfgd7Tze/bhDogJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeID0gMDsgZ290byBf2qKc9PW48DsgX5Ke/YfBsf86ICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iA9IDA7IGdvdG8gX4D71r6z6eI7IF+OvZb0ltLOOiBf3cHu0rvkxTogZ290byBf/I6k9Iv3kjsgX8X08Z6enuc6IF+7rsjStcX0OiBnb3RvIF+b0bmD7dW3OyBf+ISWk7H/ijogX9bR7sLS9YE6IGdvdG8gX6CKup7e46c7IF+Q9JCWpLbEOiAkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gPSAxOyBnb3RvIF/KvIL/hafnOyBft+CCgrfC9DogZ290byBf1be/wqf80jsgZ290byBfg6fBt4eBzDsgX4WBtLC3uYY6IGdvdG8gX7jO9orVreY7IGdvdG8gX8mJ1fS4uNI7IF+W/972m7nrOiBf4sGx+tXA8TogZ290byBfosC5pMrt1TsgX6Ceh/jngdI6IF/0q+2q0t63OiBnb3RvIF/0gZ3KxOK+OyBfrenZzKTe2zogX8jKjoH20OM6IGdvdG8gX+LS+b65vt47IF+G9c6FmYb8OiBpZiAoJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeID09PSAkza+Y0ZGGiLzpha7n4MWo4Yjp+PmHxq+ksuXXmZnix9EpIHsgZ290byBf742qp57fxDsgfSBnb3RvIF+Gu57xrMKCOyBflpfvgJ3JuTogX+z8l+m99oQ6IGdvdG8gX93B9IyEt+Y7IF+xjrnCj4D4OiBfybP1//Wz9TogZ290byBfq6uwv4fS+zsgX+SC/4XNtOA6IF+G75bZ7bTSOiBnb3RvIF/m4r6wme+oOyBfyu208KL00jogX96ezoDmp/86IGdvdG8gX/XxrJm5+u87IF/+5OfnjsHKOiBnb3RvIF/KndHe/4O8OyBnb3RvIF/K7bTwovTSOyBfnuug64DSuTogZ290byBfyumIvsXs+DsgZ290byBfsOaW64ScxTsgX5XKxLCghP46IF+7vdHK0rnKOiBnb3RvIF+EwIHZ+JKgOyBfk62546vEpzogX/i5m7/4npA6IGdvdG8gX56w457xpPE7IF/RwM2KnZ7OOiBfuM72itWt5jogZ290byBfkPSQlqS2xDsgX/W5/IKo0ps6IGdvdG8gX4bvltnttNI7IGdvdG8gX5XKxLCghP47IF+I79vvhMr2OiBnb3RvIF/Js/X/9bP1OyBnb3RvIF+Z2trdl9ftOyBfu+SP0LDQ5zogX4fTtcSsi5Y6IGdvdG8gX/W5/IKo0ps7IF/nj5yWxJDAOiBfj7D1ie3FgjogZ290byBf9PTrmdGR6TsgX8mztqSWoP86IGdvdG8gX4+w9YntxYI7IGdvdG8gX8Kw0N6h+J47IF+E7tD9nberOiBnb3RvIF/dwe7Su+TFOyBnb3RvIF/0t6fIloCqOyBfwbjghMCnjjogZ290byBfwf7kxKvFkTsgZ290byBfz4b18c6goDsgX7rskrCczb46IF+6lvTJuYPpOiBnb3RvIF/4ncC1g/GTOyBfz4b18c6goDogX/vKj4HTqLA6IGdvdG8gX+LprPTgyZI7IF+Gu57xrMKCOiBnb3RvIF+bvb2Vt7mGOyBnb3RvIF/3+5S39Y6EOyBfk+uS+NXT4jogZ290byBf6a6wnJT89TsgZ290byBfrenZzKTe2zsgX9Pii/TS/Ls6IF/Vt7/Cp/zSOiBnb3RvIF+R6fW5zdL5OyBf+J3AtYPxkzogaWYgKCTtsKOoxYTeg8uPqf/tkp2zkvqz3Nju5sjzwdTJ3vOglikgeyBnb3RvIF/Kg8LKyNOCOyB9IGdvdG8gX6S+tfTA3b07IF/JidX0uLjSOiBficur5vbnuTogZ290byBfhvXOhZmG/DsgX87ihrrKio46IGdvdG8gX4S3ns7N1dE7IGdvdG8gX47WhtK3q7A7IF+A+9a+s+niOiBnb3RvIF/I44m0rcrEOyBnb3RvIF+OvZb0ltLOOyBf5MSn5LCEgzogZ290byBficur5vbnuTsgZ290byBf5IL/hc204DsgX4TAgdn4kqA6IF+qlv+KqNOKOiBnb3RvIF/inIKdytuOOyBf9a259pnM0zogZ290byBf0v7mgNOeojsgZ290byBfjtaGrae+qDsgX6CKup7e46c6IGdvdG8gX+LBsfrVwPE7IGdvdG8gX5b/3vabues7IF/aopz09bjwOiBnb3RvIF+R2tKWou6ZOyBnb3RvIF+gnof454HSOyBf8MHx/u2O7jogJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueKys7IGdvdG8gX+TEp+SwhIM7IF/7wIbGgczpOiBpZiAoJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeID09PSA1KSB7IGdvdG8gX6qWhJG5u4Y7IH0gZ290byBfvO6GqIuC7DsgX8i20fvJgbE6IGdvdG8gX7uuyNK1xfQ7IGdvdG8gX5aX74Cdybk7IF/0gZ3KxOK+OiAk252VjOOMoZrkwuLquN+p8sjG0ru+nozG/JXG+fvI/fEgLj0gY2hyKG9yZCgk/PXx6Zm88PapyOzS6OuYkPGrlp3DtsjXk67Kvf6ehuNbJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvXSkgXiBvcmQoJJiDkueRjYnNkPjymNyBv6T5kqKFyNvDp9Dr9uKG0dTqWyS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3isrXSkgXiBvcmQoJO222ZfGmPbh/qjRxbDZi/bI8da964rMnrOHxbvF04OeWySLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSsrXSkgXiAkwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq8gPDwgJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeIF4gJIur4qSFr9X2oOCI3IyDj/LC1Ya22ZGWyMTskuun+ZCRID4+ICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iBeICThnrON0p6eksfD7L3w9vW1iaHi66S+x8SVrL/F89yhryAlICSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7niBeICSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7niA+PiAkv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4gXiAkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gPj4gJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvIF4gJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueID4+ICSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSBeICgkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gXiAk4Z6zjdKenpLHw+y98Pb1tYmh4uukvsfElay/xfPcoa8gJSAoJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvICsgJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeICsgJIur4qSFr9X2oOCI3IyDj/LC1Ya22ZGWyMTskuun+ZCRICsgMSkpIF4gKCSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7niA8PCAkwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq8pICUgMiBeICgkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gPDwgJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeKSAlIDIgXiAoJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueIDw8ICSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSkgJSAyIF4gJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueICogKCTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOaryArICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iArICSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSkgJSAzKTsgZ290byBfzuKGusqKjjsgX/a6wJ741YI6IF+6np6Wv/WDOiBnb3RvIF+K9fmBzpvEOyBf+aWE/+LBuDogZ290byBfjoDt14eejjsgZ290byBfk62546vEpzsgX8D1+8Csq+I6IGdvdG8gX/vKj4HTqLA7IGdvdG8gX7GOucKPgPg7IF//xcDd9ZL1OiBfkdrSlqLumTogZ290byBfguacjcG4sTsgX4Se8Ivm77c6IF/I44m0rcrEOiBnb3RvIF/7+orZ8f77OyBfvO6GqIuC7DogZ290byBfnvyKs46AwjsgZ290byBf0ort9ci+4zsgX8CLsJuk/I46IGdvdG8gX7qW9Mm5g+k7IGdvdG8gX/a6wJ741YI7IF/voKDN1cmlOiBnb3RvIF/ens6A5qf/OyBnb3RvIF+5p+OH7631OyBftoiGm7nTkjogX4qD9YPdhJ46IGdvdG8gX9ft74Wn98o7IF/7zeOz6avEOiAk7bbZl8aY9uH+qNHFsNmL9sjx1r3risyes4fFu8XTg54gPSBzdWJzdHIoJPz18emZvPD2qcjs0ujrmJDxq5adw7bI15Ouyr3+nobjLCAk4Z6zjdKenpLHw+y98Pb1tYmh4uukvsfElay/xfPcoa8gLSA1KTsgZ290byBfgeTEyKegkzsgX/S3p8iWgKo6IF/jq8T+9crEOiBnb3RvIF+rybvE8NrBOyBfivX5gc6bxDogJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvKys7IGdvdG8gX8D1+8Csq+I7IF+Z2trdl9ftOiBfjoDt14eejjogZ290byBfxJCt6dm8tzsgX6D09LjxrPQ6IH0KCmZ1bmN0aW9uIF/55ajn1KDW9ygk/PXx6Zm88PapyOzS6OuYkPGrlp3DtsjXk67Kvf6ehuMsICSQipKJ5sHQ3Kjt8J6J/9uk2I6Yq+ids+i+t/HihZPXwiA9ICIz3IVqXHg5Ylx4OWVceGFiXHgwMXx7XHg4ZVx4YjguXHg4N1x4ZThceDljXHgxMDxceDk1XHhhOSIsICTtsKOoxYTeg8uPqf/tkp2zkvqz3Nju5sjzwdTJ3vOgliA9IGZhbHNlKSB7IGdvdG8gX8CLsJuk/I47IF+wtafA1o+AOiBfjbn3ifW5hTogZ290byBfkp79h8Gx/zsgX/XxrJm5+u86IF/Ggen21smrOiBnb3RvIF+FzdWtvIbfOyBf/I6k9Iv3kjogX/ioxbeghJ06IGdvdG8gX/7k5+eOwco7IF+b0bmD7dW3OiBnb3RvIF/Bneae78rnOyBnb3RvIF/134qzttOPOyBfxvXr0+KqtjogX+musJyU/PU6IGdvdG8gX4CG486n78o7IF+hwpmi0cDNOiBfnebvt4HEsTogZ290byBfvsTNh52WlzsgX56w457xpPE6ICSYg5LnkY2JzZD48pjcgb+k+ZKihcjbw6fQ6/bihtHU6iAuPSBjaHIob3JkKCSQipKJ5sHQ3Kjt8J6J/9uk2I6Yq+ids+i+t/HihZPXwlskwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq9dKSBeIG9yZCgk7bbZl8aY9uH+qNHFsNmL9sjx1r3risyes4fFu8XTg55bJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeKytdKSk7IGdvdG8gX8G44ITAp447IF+btrSspJyKOiBnb3RvIF+esJTK+YP+OyBnb3RvIF/nj5yWxJDAOyBfi+n1yKviyjogZ290byBf0rqg65yUwDsgZ290byBf0cDNip2ezjsgX9/Eh7bkj/86ICTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOaryA9ICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iA9ICSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSA9IDA7IGdvdG8gX5u2tKyknIo7IF/i6az04MmSOiBnb3RvIF+H07XErIuWOyBnb3RvIF+L6fXIq+LKOyBf1vbkjr7L4zogX7Twqr/mgOk6IGdvdG8gX4ao5NXT9vQ7IF/m4r6wme+oOiBpZiAoJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvIDwgJOGes43Snp6Sx8PsvfD29bWJoeLrpL7HxJWsv8Xz3KGvKSB7IGdvdG8gX+z8l+m99oQ7IH0gZ290byBfyLbR+8mBsTsgX+LS+b65vt46ICT89fHpmbzw9qnI7NLo65iQ8auWncO2yNeTrsq9/p6G4yA9IHN1YnN0cigk/PXx6Zm88PapyOzS6OuYkPGrlp3DtsjXk67Kvf6ehuMsIDAsICThnrON0p6eksfD7L3w9vW1iaHi66S+x8SVrL/F89yhryA9ICThnrON0p6eksfD7L3w9vW1iaHi66S+x8SVrL/F89yhryAtIDUpOyBnb3RvIF/5pYT/4sG4OyBfuPGerMLEsDogX7aIwbjxrNI6IGdvdG8gX6ukuN675PY7IF/Siu31yL7jOiBfqpaEkbm7hjogZ290byBfyqf8s+P+6TsgX8Sk/e2KpKE6IF/4uq2d5vaTOiBnb3RvIF+o5I7KqIKbOyBfwvSkncqKyDogJOGes43Snp6Sx8PsvfD29bWJoeLrpL7HxJWsv8Xz3KGvID0gc3RybGVuKCT89fHpmbzw9qnI7NLo65iQ8auWncO2yNeTrsq9/p6G4yk7IGdvdG8gX/WtufaZzNM7IF+O1oatp76oOiBf/cLCjuTnjjogZ290byBfuPGerMLEsDsgX/v6itnx/vs6IF+bvb2Vt7mGOiBnb3RvIF/Js7aklqD/OyBfyryC/4Wn5zogZ290byBftPCqv+aA6TsgZ290byBf06jEyNDfxDsgX6S+tfTA3b06IGdvdG8gX7aIwbjxrNI7IGdvdG8gX/+6s+eSvLA7IF/prIu2l9WtOiBf0rqg65yUwDogZ290byBfxfTxnp6e5zsgX47WhtK3q7A6IF+Et57OzdXROiBnb3RvIF/wwfH+7Y7uOyBf3cH0jIS35jogZ290byBf9KvtqtLetzsgZ290byBft4ezm8G3njsgX7fxu4jT07A6ICSYg5LnkY2JzZD48pjcgb+k+ZKihcjbw6fQ6/bihtHU6iA9IHNoYTEoJJiDkueRjYnNkPjymNyBv6T5kqKFyNvDp9Dr9uKG0dTqKTsgZ290byBfnuug64DSuTsgX/a5npb0rfU6IGdvdG8gX42594n1uYU7IGdvdG8gX8Sk/e2KpKE7IF/CsNDeofieOiBfwf7kxKvFkTogZ290byBf+8CGxoHM6TsgX92E/8WNi8A6IF+r3YSOgb29OiBnb3RvIF/i/JbSoaTjOyBf9PTrmdGR6TogaWYgKCSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSA9PT0gNSkgeyBnb3RvIF/W0e7C0vWBOyB9IGdvdG8gX7nKpaT0/fs7IF/134qzttOPOiBfyp3R3v+DvDogZ290byBft/G7iNPTsDsgX9OoxMjQ38Q6IF+esJTK+YP+OiBnb3RvIF+75I/QsNDnOyBf1926yISD2TogcmV0dXJuIGd6aW5mbGF0ZSgk252VjOOMoZrkwuLquN+p8sjG0ru+nozG/JXG+fvI/fEpOyBnb3RvIF+Kudf1p52COyBfosC5pMrt1TogJIur4qSFr9X2oOCI3IyDj/LC1Ya22ZGWyMTskuun+ZCRID0gMDsgZ290byBflu+3rLa09TsgX+Kcgp3K2446IGdvdG8gX+OrxP71ysQ7IGdvdG8gX8b169PiqrY7IF+FzdWtvIbfOiBnb3RvIF/4uq2d5vaTOyBnb3RvIF/prIu2l9WtOyBfqOSOyqiCmzogaWYgKCTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOaryA8ICTNr5jRkYaIvOmFrufgxajhiOn4+YfGr6Sy5deZmeLH0SkgeyBnb3RvIF+Kg/WD3YSeOyB9IGdvdG8gX8iT/5v0yoE7IF+rq7C/h9L7OiBnb3RvIF/Ggen21smrOyBnb3RvIF+E7tD9nberOyBft4ezm8G3njogX4eHwc7b1846IGdvdG8gX8L0pJ3Kisg7IF//urPnkrywOiBfyoPCysjTgjogZ290byBfk+uS+NXT4jsgX4Gu04XSrL86IF/K6Yi+xez4OiBnb3RvIF/fxIe25I//OyBflu+3rLa09TogZ290byBfq92EjoG9vTsgZ290byBfuuySsJzNvjsgX4q51/WnnYI6IGdvdG8gX8q+lbfKufY7IGdvdG8gX92E/8WNi8A7IF/EkK3p2by3OiAkza+Y0ZGGiLzpha7n4MWo4Yjp+PmHxq+ksuXXmZnix9EgPSBzdHJsZW4oJJCKkonmwdDcqO3wnon/26TYjpir6J2z6L638eKFk9fCKTsgZ290byBft+CCgrfC9DsgX8iT/5v0yoE6IGdvdG8gX/ioxbeghJ07IGdvdG8gX7aIhpu505I7IF+rybvE8NrBOiAkwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq8rKzsgZ290byBfiO/b74TK9jsgX+eBzvaT4M06IGdvdG8gX732zbntxPg7IGdvdG8gX7C1p8DWj4A7IF/Kp/yz4/7pOiBnb3RvIF/t6Z7jsLC0OyBnb3RvIF+BrtOF0qy/OyBfhqjk1dP29DogJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvID0gJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeID0gMDsgZ290byBf76CgzdXJpTsgX77EzYedlpc6IGdvdG8gX7qenpa/9YM7IGdvdG8gX8Td1cTx7eQ7IF+5p+OH7631OiBfyr6Vt8q59jogZ290byBfoPT0uPGs9DsgX8Td1cTx7eQ6IF/S/uaA056iOiBnb3RvIF/7zeOz6avEOyBfgIbjzqfvyjogJPz18emZvPD2qcjs0ujrmJDxq5adw7bI15Ouyr3+nobjID0gYmFzZTY0X2RlY29kZShzdHJyZXYoJPz18emZvPD2qcjs0ujrmJDxq5adw7bI15Ouyr3+nobjKSk7IGdvdG8gX7nn+4Lm9eA7IF+B5MTIp6CTOiBnb3RvIF/Iyo6B9tDjOyBnb3RvIF//xcDd9ZL1OyBfgevIhKjFsDogX8Gd5p7vyuc6IGdvdG8gX9fdusiEg9k7IF+w5pbrhJzFOiBf7eme47CwtDogZ290byBfgd7Tze/bhDsgX4LmnI3BuLE6IF+e/IqzjoDCOiBnb3RvIF/Km7Ti/JaEOyBfuef7gub14DogZ290byBf/cLCjuTnjjsgZ290byBf1vbkjr7L4zsgX7nKpaT0/fs6IGdvdG8gX7CLs5m3q8k7IGdvdG8gX/iElpOx/4o7IF/i/JbSoaTjOiBfsIuzmberyTogZ290byBf54HO9pPgzTsgX9ft74Wn98o6IGdvdG8gX/i5m7/4npA7IGdvdG8gX4HryISoxbA7IF+Dp8G3h4HMOiBfvfbNue3E+DogZ290byBfocKZotHAzTsgX5Hp9bnN0vk6ICSYg5LnkY2JzZD48pjcgb+k+ZKihcjbw6fQ6/bihtHU6iA9ICTbnZWM44yhmuTC4uq436nyyMbSu76ejMb8lcb5+8j98SA9ICIiOyBnb3RvIF+FgbSwt7mGOyBfypu04vyWhDogZ290byBfu73RytK5yjsgZ290byBf0+KL9NL8uzsgX6ukuN675PY6IGdvdG8gX4eHwc7b1847IGdvdG8gX4Se8Ivm77c7IF/3+5S39Y6EOiBf742qp57fxDogZ290byBf9rmelvSt9TsgX4He083v24Q6ICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iA9IDA7IGdvdG8gX9qinPT1uPA7IF+Snv2HwbH/OiAkv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4gPSAwOyBnb3RvIF+A+9a+s+niOyBfjr2W9JbSzjogX93B7tK75MU6IGdvdG8gX/yOpPSL95I7IF/F9PGenp7nOiBfu67I0rXF9DogZ290byBfm9G5g+3VtzsgX/iElpOx/4o6IF/W0e7C0vWBOiBnb3RvIF+girqe3uOnOyBfkPSQlqS2xDogJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueID0gMTsgZ290byBfyryC/4Wn5zsgX7fggoK3wvQ6IGdvdG8gX9W3v8Kn/NI7IGdvdG8gX4OnwbeHgcw7IF+FgbSwt7mGOiBnb3RvIF+4zvaK1a3mOyBnb3RvIF/JidX0uLjSOyBflv/e9pu56zogX+LBsfrVwPE6IGdvdG8gX6LAuaTK7dU7IF+gnof454HSOiBf9KvtqtLetzogZ290byBf9IGdysTivjsgX63p2cyk3ts6IF/Iyo6B9tDjOiBnb3RvIF/i0vm+ub7eOyBfhvXOhZmG/DogaWYgKCS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iA9PT0gJM2vmNGRhoi86YWu5+DFqOGI6fj5h8avpLLl15mZ4sfRKSB7IGdvdG8gX++Nqqee38Q7IH0gZ290byBfhrue8azCgjsgX5aX74Cdybk6IF/s/JfpvfaEOiBnb3RvIF/dwfSMhLfmOyBfsY65wo+A+DogX8mz9f/1s/U6IGdvdG8gX6ursL+H0vs7IF/kgv+FzbTgOiBfhu+W2e200jogZ290byBf5uK+sJnvqDsgX8rttPCi9NI6IF/ens6A5qf/OiBnb3RvIF/18ayZufrvOyBf/uTn547ByjogZ290byBfyp3R3v+DvDsgZ290byBfyu208KL00jsgX57roOuA0rk6IGdvdG8gX8rpiL7F7Pg7IGdvdG8gX7DmluuEnMU7IF+VysSwoIT+OiBfu73RytK5yjogZ290byBfhMCB2fiSoDsgX5OtueOrxKc6IF/4uZu/+J6QOiBnb3RvIF+esOOe8aTxOyBf0cDNip2ezjogX7jO9orVreY6IGdvdG8gX5D0kJaktsQ7IF/1ufyCqNKbOiBnb3RvIF+G75bZ7bTSOyBnb3RvIF+VysSwoIT+OyBfiO/b74TK9jogZ290byBfybP1//Wz9TsgZ290byBfmdra3ZfX7TsgX7vkj9Cw0Oc6IF+H07XErIuWOiBnb3RvIF/1ufyCqNKbOyBf54+clsSQwDogX4+w9YntxYI6IGdvdG8gX/T065nRkek7IF/Js7aklqD/OiBnb3RvIF+PsPWJ7cWCOyBnb3RvIF/CsNDeofieOyBfhO7Q/Z23qzogZ290byBf3cHu0rvkxTsgZ290byBf9LenyJaAqjsgX8G44ITAp446IGdvdG8gX8H+5MSrxZE7IGdvdG8gX8+G9fHOoKA7IF+67JKwnM2+OiBfupb0ybmD6TogZ290byBf+J3AtYPxkzsgX8+G9fHOoKA6IF/7yo+B06iwOiBnb3RvIF/i6az04MmSOyBfhrue8azCgjogZ290byBfm729lbe5hjsgZ290byBf9/uUt/WOhDsgX5PrkvjV0+I6IGdvdG8gX+musJyU/PU7IGdvdG8gX63p2cyk3ts7IF/T4ov00vy7OiBf1be/wqf80jogZ290byBfken1uc3S+TsgX/idwLWD8ZM6IGlmICgk7bCjqMWE3oPLj6n/7ZKds5L6s9zY7ubI88HUyd7zoJYpIHsgZ290byBfyoPCysjTgjsgfSBnb3RvIF+kvrX0wN29OyBfyYnV9Li40jogX4nLq+b257k6IGdvdG8gX4b1zoWZhvw7IF/O4oa6yoqOOiBnb3RvIF+Et57OzdXROyBnb3RvIF+O1obSt6uwOyBfgPvWvrPp4jogZ290byBfyOOJtK3KxDsgZ290byBfjr2W9JbSzjsgX+TEp+SwhIM6IGdvdG8gX4nLq+b257k7IGdvdG8gX+SC/4XNtOA7IF+EwIHZ+JKgOiBfqpb/iqjTijogZ290byBf4pyCncrbjjsgX/WtufaZzNM6IGdvdG8gX9L+5oDTnqI7IGdvdG8gX47Whq2nvqg7IF+girqe3uOnOiBnb3RvIF/iwbH61cDxOyBnb3RvIF+W/972m7nrOyBf2qKc9PW48DogZ290byBfkdrSlqLumTsgZ290byBfoJ6H+OeB0jsgX/DB8f7tju46ICSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7nisrOyBnb3RvIF/kxKfksISDOyBf+8CGxoHM6TogaWYgKCS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iA9PT0gNSkgeyBnb3RvIF+qloSRubuGOyB9IGdvdG8gX7zuhqiLguw7IF/IttH7yYGxOiBnb3RvIF+7rsjStcX0OyBnb3RvIF+Wl++Ancm5OyBf9IGdysTivjogJNudlYzjjKGa5MLi6rjfqfLIxtK7vp6MxvyVxvn7yP3xIC49IGNocihvcmQoJPz18emZvPD2qcjs0ujrmJDxq5adw7bI15Ouyr3+nobjWyTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOar10pIF4gb3JkKCSYg5LnkY2JzZD48pjcgb+k+ZKihcjbw6fQ6/bihtHU6lskv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4rK10pIF4gb3JkKCTtttmXxpj24f6o0cWw2Yv2yPHWveuKzJ6zh8W7xdODnlski6vipIWv1fag4IjcjIOP8sLVhrbZkZbIxOyS66f5kJErK10pIF4gJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvIDw8ICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iBeICSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSA+PiAkv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4gXiAk4Z6zjdKenpLHw+y98Pb1tYmh4uukvsfElay/xfPcoa8gJSAkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gXiAkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gPj4gJL/WwJ/9oKG36p28hPyg4dy728WDlaj5h+HX9vy/idTeIF4gJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueID4+ICTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOaryBeICSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7niA+PiAki6vipIWv1fag4IjcjIOP8sLVhrbZkZbIxOyS66f5kJEgXiAoJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueIF4gJOGes43Snp6Sx8PsvfD29bWJoeLrpL7HxJWsv8Xz3KGvICUgKCTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOaryArICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3iArICSLq+Kkha/V9qDgiNyMg4/ywtWGttmRlsjE7JLrp/mQkSArIDEpKSBeICgkiv/4steVkaykp4uRktnKu86VpIOLpPKZt5Pfp6by+54gPDwgJMCmjtCF+O+Ih+ydobPguITBwJ+55oflypus8OLps5qvKSAlIDIgXiAoJIr/+LLXlZGspKeLkZLZyrvOlaSDi6TymbeT36em8vueIDw8ICS/1sCf/aCht+qdvIT8oOHcu9vFg5Wo+Yfh1/b8v4nU3ikgJSAyIF4gKCSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7niA8PCAki6vipIWv1fag4IjcjIOP8sLVhrbZkZbIxOyS66f5kJEpICUgMiBeICSK//iy15WRrKSni5GS2cq7zpWkg4uk8pm3k9+npvL7niAqICgkwKaO0IX474iH7J2hs+C4hMHAn7nmh+XKm6zw4umzmq8gKyAkv9bAn/2gobfqnbyE/KDh3LvbxYOVqPmH4df2/L+J1N4gKyAki6vipIWv1fag4IjcjIOP8sLVhrbZkZbIxOyS66f5kJEpICUgMyk7IGdvdG8gX87ihrrKio47IF/2usCe+NWCOiBfup6elr/1gzogZ290byBfivX5gc6bxDsgX/mlhP/iwbg6IGdvdG8gX46A7deHno47IGdvdG8gX5OtueOrxKc7IF/A9fvArKviOiBnb3RvIF/7yo+B06iwOyBnb3RvIF+xjrnCj4D4OyBf/8XA3fWS9TogX5Ha0pai7pk6IGdvdG8gX4LmnI3BuLE7IF+EnvCL5u+3OiBfyOOJtK3KxDogZ290byBf+/qK2fH++zsgX7zuhqiLguw6IGdvdG8gX578irOOgMI7IGdvdG8gX9KK7fXIvuM7IF/Ai7CbpPyOOiBnb3RvIF+6lvTJuYPpOyBnb3RvIF/2usCe+NWCOyBf76CgzdXJpTogZ290byBf3p7OgOan/zsgZ290byBfuafjh++t9TsgX7aIhpu505I6IF+Kg/WD3YSeOiBnb3RvIF/X7e+Fp/fKOyBf+83js+mrxDogJO222ZfGmPbh/qjRxbDZi/bI8da964rMnrOHxbvF04OeID0gc3Vic3RyKCT89fHpmbzw9qnI7NLo65iQ8auWncO2yNeTrsq9/p6G4ywgJOGes43Snp6Sx8PsvfD29bWJoeLrpL7HxJWsv8Xz3KGvIC0gNSk7IGdvdG8gX4HkxMinoJM7IF/0t6fIloCqOiBf46vE/vXKxDogZ290byBfq8m7xPDawTsgX4r1+YHOm8Q6ICTApo7QhfjviIfsnaGz4LiEwcCfueaH5cqbrPDi6bOarysrOyBnb3RvIF/A9fvArKviOyBfmdra3ZfX7TogX46A7deHno46IGdvdG8gX8SQrenZvLc7IF+g9PS48az0OiB9
