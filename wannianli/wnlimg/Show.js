var SukuDofs = 12;
var KyuuseiName3 = new Array('����̫�������ǹٺ�̰�ǣ��Ĳʲ�ϲ���������󼪲���<br>�������赲�����˼�������������������±�������',
'��ǰ�����ᣬ���±����ɣ��������Կɣ���˻����١�<br>���Ų���ᣬ�ϸ��ޱ��䣬��ı�����£����Բ����ˡ�<br>ֻ�ɲ����ݣ�����������',
'�������ԯ�����±ز�ǣ������ȫ��������˸��Ǽ塣<br>Զ�ж಻�������ʾ���Ǯ��������Ů������䲻���ԡ�',
'��ҡ��ľ�ǣ���֮��Ī�У���������裬���˿���ӭ��<br>���¶ྪ�壬���츫������������Ϣ���򷨸�Υ�顣',
'���Ϊ�����������Ůı������޺��£���·����;��<br>��ʧ��Ѱ�٣���������ã����ǵ���ֵ���������ֳ���',
'���Ծ����������ϲ���أ�Ͷ���о�ʳ���Ĳ�����¡��<br>���������������Կ����ף�����Ӫկ�������ܼ�ͬ��',
'�ὫΪ�̳أ���֮�����ˣ�����಻������������顣<br>�Ĳ�ȫ�価����ƿ��ֻأ��������������Ī��֪��<br>�����龪�ˣ�������紵��',
'����̫���ǣ��ٻ������֣���ıϤ�ɾͣ�֪������Ѱ��<br>�ط����·����������������м�ȡ������Ī���С�', 
'ӭ�������ǣ��������ˣ����úͺ��죬���ϲ��ӭ��<br>��ı����Ȣ���ú�����ɡ����������飬������������'); 
var Sukuyou3 = new Array('�����������ٲ��������Ƽ�Ů�ɣ���Ȣ���������ӣ����˼��ڼ�������Ω�����᲻���ã�����֮�������ߣ����޽��ػ��أ���ǰ���������ס�<br><br>���壺<br>������������ٲ���������������ϲ�¡�����ý��������Ȣ��ɳ����ӣ������˵Ĺ�����һ����˳�����ǲ����ý��������ᣬ��������֮�������ߡ�����ý������޽���Ĺ��ػ��������˲�����',
'����������������ʮ��֮�������꣬�����ĥ��ʧְ�����˶��ǻ����ˣ���Ȣ�����ô��գ������¸��ؿշ������������ô��գ���ʱ���������ˡ�<br><br>���壺<br>���������򳤷���ʮ��֮�������꣬���ﲻ���һ�ʧȥ��ְ��������С�����ˡ�����ÿ����м�Ȣ��������¸�Ҫ�ؿշ�������ÿ��������������ֻ������ˡ�',
'ص�����������ף��Ѿ���԰�ֿ�գ����᲻���ô��գ��������������أ����ǻ������ɢ��ҹ�������뷿�У��д��ض����û���������������<br><br>���壺<br>ص�������������꣬��԰�Ʋ�һʱ�ա���ص�ǽ������ᣬ�����˻��������ˡ��ֻ��Ӷ���������ص���л��������𡢸��˲��꣬�����ֲ����������������Ƶ�������ֵü�ͥ���',
'����������԰����Ǯ��ţ���ɽ�ڣ������⴦��ׯլ���ٻ�����»����������Ȼ�ô��գ��߹ٽ�ְ�ݾ�������Ȣ�϶����µ���걧�������á�<br><br>���壺<br>�����������Դ�������������ٻ������и�»���������彡�����÷�������������;ƽ�ȣ���Ȣ�ôˣ��ջ�������������ù��ӡ�',
'����������Ϊ�ף��������������У�����ٷ�լ���ˣ������䱩����ӣ����������ô��գ��������������أ�����֮������������½̾�ûʼ�ա�<br><br>���壺<br>������������ף�������֮�֣����泤�����ǹٷǣ���ʧլ������������ף���춻��������ӣ����½Ӷ�������������ʳ�Ѱ���','β������������������ٻ���»�����вƽ����˼�լ���ͺϻ���������������������գ�����Ů�������ˣ����ŷ�ˮ����լ����������Զ������<br><br>���壺<br>β���������ٻ����󡢸�»����Դ�����������л���������������������й�������β��������������������������Ŀ��ŷ�ˮ���Դ����������������������',
'������������ǿ����������󼪲��������޷ش��������ţ���ɽ�ڣ����ŷ�ˮ����լ���������������֣�����߹ټ�»λ�����׷����ְ�����<br><br>���壺<br>��������������󼪲��������޷�Ҳ��������ˮ����Ŀ��ŷ�ˮ��������٣�ʹ��Դ�������������׷��㣬������ÿ���ƽ�������彡������;ƽ�ȡ�',
'�����������вƣ������Աλ��̨����լ�Ҳ�ǧ����������޼����������ŷ�ˮ��ţ��������Ů����г�����˼������ջ���ʱ֧���������֡�<br><br>���壺<br>�����������вơ��������;����ҵ�������١��޼��صؿ��и��󣬿��ŷ�ˮ���н��ƣ���ʹ��ͥ�������и������֡�','ţ����������Σ���ź����ֲ����ƣ���լ�����˿��ˣ���ϲ�������˥����Ȣ���������𣬽����ƹȽ���֮�����ǿ��Ų���ˮ��ţ���������˱���<br><br>���壺<br>ţ���������ֶ����ֺ�������⣬��ͥ�����������˿ڣ���ҵ����������л���������Ǯ�ƽ��ˣ��������ŷ�ˮ��������',
'Ů������������ֵ������ƻ��ǣ��������ַ��֣���а���������̣�Ϊ����ٲ�ʧɢ��к���������ɵ������ŷ�ˮ�ô��գ�ȫ�Ҳ�ɢ�����硣<br><br>���壺<br>Ů������������Ů���ֻ����˿ڡ��ֵܻ���¼ɣ����鲻�������ñ�ˮ�������ݡ�����������������й�֣��йֲ��������������������Ƕ�ʧ�ơ�Ҫ�ǿ��ŷ�ˮ�����ͥ��ɢ������𾮡�','�������������꣬��Ů���߲�һ˫�����ҷ�������ڣ�����ϱ�����˴������ŷ�ˮ���ֻ�����ҧ�����������������������겡�������������ɵ���<br><br>���壺<br>���������������꣬��Ů����޷���˫����ͥ�����������Ҷ���ϱ�������ؽڲ٣����������������翪�ŷ�ˮ�����ֻ������˿ڣ��������������Ӷ�������ֱ������������',
'Σ�ǲ������¥�������̵���Ѫ�⣬���꺢����ˮ������������������������������գ��������ȡ���ã���������һ���ˣ����ŷ�ˮ�����á�<br><br>���壺<br>Σ�����������̵���Ѫ��֮�֣������ں��ӻ���ˮ�����˿ڣ�������ⲻ��ҡ���������������ˣ����������곤�����ֶ�Ҫ�ǿ��ŷ�ˮ������Ϲ��� (���˾) ��','�����������ţ���������������ҹ��ٻ������������������ǧ����ŷ�ˮ�вƲ����ͺϻ�����������������������գ���ͥ���������ݡ�<br><br>���壺<br>��������������������ٻ������Ҳ�Դ��������١����ŷ�ˮ����вƽ������л�����������ӡ�Ҫ����������������������»���','������������ƣ�˿�����츣���죬ū������˿ڽ������ŷ�ˮ��Ӣ�ͣ������вƹ�Ʒ����������������Ȼ���������������ӣ��粥��������ޡ�<br><br>���壺<br>����������н��ơ���Դ�������ҵ�гɡ������ˮ��������ܣ���������вƣ������������;����ͥ�����Ҹ�����������л�����������������Ӷ���������','�������������飬�����ٺʹ󼪲����������������������궨�������ˣ������������˵������ع��������̣����ŷ�ˮ���ֻ���������������ɡ�<br><br>���壺<br>����������������飬��ʹ���ڷ��ٶ����������ǲ����������ᣬ����һ���ڱ��������������й��¼��ֲ�������Ҫ�ǿ��ŷ�ˮ�����ֻ����Զ��Ӳ�����','¦����������ͥ�������Һ������ˣ����Ǯ�ư��ս���һ���ֵܲ��������������������ӣ��񲯽�������ӯ����ˮ���ŽԼ���������Ů���ٿ�����<br><br>���壺<br>¦���������ʹ��ҵ��������Դ������ֵܺ������������л������������ӣ�Ҫ�ǿ��ŷ�ˮ�����彡�������٣����úܺá�','θ����������Σ��ҹ��ٻ�ϲ���࣬������ٹ�»λ������ü���������������˼Ҹ������־Ż����������Ӵ���ǰ�༪�죬��������ݽ�ס�<br><br>���壺<br>θ���������ٻ�����ϲ���������������������;���򸾿ɰ������ϡ��л������ʹ���ڸ��󣬶��������������','������������ţ��������ֲ����ݣ���ɥ������������������԰�����������ŷ�ˮ���ֻ������꺢������ͷ���������ɷ���գ����������ǿɳ<br><br>���壺<br>����������ʹ��ҵ��ʢ�����������й��֣��һ�������ˣ����������������ŷ�ˮ������ֻ�����ͯ��ùֲ����л�����������������������롣',
'������������ǰ�������԰����Ǯ������������ְ���������������꣬���ŷ�ˮ�༪�죬�ϼ��˿ڵð�Ȼ���������÷���գ����ú�������ȫ��<br><br>���壺<br>�����������Դ��������������������;����ҵ���������ŷ�ˮ����ϼһ��֣��л������������Ӷ�����˫ȫ��','����������ͽ�̣�����ض����涡��������������ˣ�ȡ������ʹɱ�ˣ���ɥ��ֹ���ɴˣ�һ��ҩ��������������ؽ��˰ܣ��ֿ������������<br><br>���壺<br>�������������̺����������ꡣ�����������������б��������󣬶���Ӧ����꣬�ֻ����ϣ�ֱ��ʹ�����ɢ���Ƽҡ�','�����������˼ң�������ҫ��⻪��ֻ������������������м��޻�ɳ�����ŷ�ˮ�ӹ�ְ�������������ӣ�����������̿ˣ���Ů����Ļ�仨��<br><br>���壺<br>�������������˼ң����Ǹ��գ����������������������������ס����ŷ�ˮ���������;������������������������л�������ף������̿ˣ������޷�������','����������������������һ�⣬�����������������߷缲���Ȫ�����ŷ�ˮ�вƲ���ţ��������Ī�ԣ�������������լ��������������Ǯ��<br><br>���壺<br>�����������Դ������ɽ���������������������׵ùֲ��������Ȫ�����ŷ�ˮ���вƽ������������أ�����������','������������������ǰ���������ɣ�������չ�»����������������������ŷ�ˮ����������Ȣ���޲��ó���������ǽ�˲�Ů���ַ�˫Ů��������<br><br>���壺<br>������������ף������˿ڡ������ô�����ɼӹڽ�»���Զ������;���������ǿ��ŷ�ˮ�������˿ڣ�Ҫ���л����������ǽҲ���ס�',
'������������٣���ҹ͵�ղ��ݰ����������̶༲������԰�˾��ض��������ŷ�ˮ����Ϲ����٢�����ƹ��䣬���������˽���������������̻���<br><br>���壺<br>�����������й��£����հ�����������༲������������˰ܡ����ŷ�ˮ������������Ϲ�۵�ë���������䱳�����صĻ��������̴򣬸��˲��ظ�����','�����պ����·�����ְ�ӹٽ��������������Ტ��ˮ��������λŮ����������������������Ҫ�Թ��ݱ���ɣ����Ӿ������Ѷȣ���ˮ���������ˡ�<br><br>���壺<br>�����������������;���������������ˮ��������ף�������������֮����','�����պ������������겢����ׯ����᲻������ְ������Ϊ�ٽ���ǰ�����ŷ�ˮ�вƲ��������ͺϸ����࣬���������ֿ������ٰ�˳���԰�Ȼ��<br><br>���壺<br>�����������Դ������������������;�����ŷ�ˮ����вƽ������л�������޶����ͺϸ����࣬�������⣬��Ȼ�Եá�','���ǲ����ܸ��ã�������ؼ����̣�������������գ�����ض������磬�������ղ���������Ҷ��ǲ��൱�����ŷ�ˮ�����ƣ���Ů����̰���ɡ�<br><br>���壺<br>�������������׵ùֲ���Ҫ��������������Զ�����硣�л�����������Ů���ظ��������ŷ�ˮ����ƣ���Ů��������','������ˮ������������Ϊ���ܻʷ⣬�����ٻ�����»��������ӯ�Բ�¡�������Ĳ���������լ�ᰲ�������ף�����Ϊ��մ�۳裬����������������<br><br>���壺<br>�����������������;���ٻ����������٣���Դ�������������լ�ᰲ����'); 
var zrxName1 = new Array('����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>');
var zrxName2 = new Array('˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>');
var zrxName3 = new Array('����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>');
var zrxName4 = new Array('�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>');
var zrxName5 = new Array('����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>');
var zrxName6 = new Array('����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>');
var zrxName7 = new Array('����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>');
var zrxName8 = new Array('˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>');
var zrxName9 = new Array('����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>');
var zrxName10 = new Array('�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>');
var zrxName11 = new Array('����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>');
var zrxName12 = new Array('����<FONT color=#0000A0>(�ڵ���)</font>','��ȸ<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','���<font color=#FF8C1A>(�Ƶ���)</font>','�׻�<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','˾��<font color=#FF8C1A>(�Ƶ���)</font>','����<FONT color=#0000A0>(�ڵ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>','����<font color=#FF8C1A>(�Ƶ���)</font>');

function jcr(d){
	var jcrjx;
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>����,����,����,����,����<br><FONT color=#0000A0>�ɣ�</font>����,����,��Ȣ,�ɲ�';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>����,�Ʋ�,����,��ж,��լ<br><FONT color=#0000A0>�ɣ�</font>���,����,����,���,̽��';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>��,����,����,����,����<br><FONT color=#0000A0>�ɣ�</font>��ҩ,��ҽ,����,����,Ǩ��';
	if(d=='ƽ') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>����,�މ�,Ϳ��,�N����ȡ<br><FONT color=#0000A0>�ɣ�</font>����.��լ.��Ȣ.����.����';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>����,��ȯ,����,ǩ�s,�{��<br><FONT color=#0000A0>�ɣ�</font>��ֲ,��ҵ,����,��,�촬';
	if(d=='ִ') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>��,����,����,���,��Լ<br><FONT color=#0000A0>�ɣ�</font>����,����,���,Զ��';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>��ҽ,����,����,�N����ȡ<br><FONT color=#0000A0>�ɣ�</font>����,����,����,����,����';
	if(d=='Σ') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>��Ӫ,����,���,�{��,����<br><FONT color=#0000A0>�ɣ�</font>�Ǹ�,�д�.����.��լ.����';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>��,��ѧ,����,��ҽ,�ɷ�<br><FONT color=#0000A0>�ɣ�</font>����,���T,����';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>����,���,ǩԼ,��Ȣ,����<br><FONT color=#0000A0>�ɣ�</font>����.����.����.��լ.����';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>�Ʋ�,���,����,���,��ְ<br><FONT color=#0000A0>�ɣ�</font>����,����,���';
	if(d=='��') jcrjx='<FONT color=#FF8C1A>�ˣ�</font>����,����,�ղ�,����<br><FONT color=#0000A0>�ɣ�</font>���,����,����,��Ȣ,����';
	return(jcrjx);
}

function cyclical7(num,num2) {
	if (num==2)
		return(zrxName1[num2]);
	if (num==3)
		return(zrxName2[num2]);
	if (num==4)
		return(zrxName3[num2]);
	if (num==5)
		return(zrxName4[num2]);
	if (num==6)
		return(zrxName5[num2]);
	if (num==7)
		return(zrxName6[num2]);
	if (num==8)
		return(zrxName7[num2]);
	if (num==9)
		return(zrxName8[num2]);   
	if (num==10)
		return(zrxName9[num2]);
	if (num==11)   
		return(zrxName10[num2]);
	if (num==0)
		return(zrxName11[num2]);
	if (num==1)
		return(zrxName12[num2]);
}

function CalConv2(yy,mm,dd,y,d,m,dt,nm,nd) {
	var dy=d+''+dd
	if ((yy==0 && dd==6)||(yy==6 && dd==0)||(yy==1 && dd==7)||(yy==7 && dd==1)||(yy==2 && dd==8)||(yy==8 && dd==2)||(yy==3 && dd==9)||(yy==9 && dd==3)||(yy==4 && dd==10)||(yy==10 && dd==4)||(yy==5 && dd==11)||(yy==11 && dd==5)) {return '<FONT color=#0000A0>��ֵ���� ���²���</font>';}
	else if ((mm==0 && dd==6)||(mm==6 && dd==0)||(mm==1 && dd==7)||(mm==7 && dd==1)||(mm==2 && dd==8)||(mm==8 && dd==2)||(mm==3 && dd==9)||(mm==9 && dd==3)||(mm==4 && dd==10)||(mm==10 && dd==4)||(mm==5 && dd==11)||(mm==11 && dd==5)) {return '<FONT color=#0000A0><center>��ֵ���� ���²���</font>';}
	else if ((y==0 && dy=='911')||(y==1 && dy=='55')||(y==2 && dy=='111')||(y==3 && dy=='75')||(y==4 && dy=='311')||(y==5 && dy=='95')||(y==6 && dy=='511')||(y==7 && dy=='15')||(y==8 && dy=='711')||(y==9 && dy=='35')) {return '<FONT color=#0000A0><center>��ֵ��˷ ���²���</font>';}
	else if ((m==1 && dt==13)||(m==2 && dt==11)||(m==3 && dt==9)||(m==4 && dt==7)||(m==5 && dt==5)||(m==6 && dt==3)||(m==7 && dt==1)||(m==7 && dt==29)||(m==8 && dt==27)||(m==9 && dt==25)||(m==10 && dt==23)||(m==11 && dt==21)||(m==12 && dt==19)) {return '<FONT color=#0000A0><center>��ֵ�ʮ���� ���²���</font>';}
	else{return 0;}
}
function Year2Kyuusei(yy)
{
	return (9001 - yy) % 9;
}
function Year2KyuuseiNameS(yy) {
	var ans;
	ans = Year2Kyuusei(yy);
	return KyuuseiName[ans];
}
function Year2KyuuseiNameL(yy) {
	var ans;
	ans = Year2Kyuusei(yy);
	return KyuuseiName[ans] + KyuuseiName2[ans];
}
function Jd2KyuuseiNameS(JD)
{
	var ans;
	ans = Jd2Kyuusei(JD);
	if (ans >= 0) return KyuuseiName[ans];
	return '';
}
function Jd2KyuuseiNameL(JD)
{
	var ans;
	ans = Jd2Kyuusei(JD);
	if (ans >= 0) {
		return '���ǣ�'+(KyuuseiName[ans] + KyuuseiName2[ans]);
	}
	return '';
}
function Jd2Kyuusei(JD)
{
	var flag,base;
	JD = Math.floor(JD);
	if ((JD < NKyuusei[0]) || (JD >= NKyuusei[0] + NKyuusei[1])){
		if (GetTenton(JD) < 0) return -1;
	}
	
	if (NKyuusei[2] < 0) {flag = -1;}
	else { flag = 1;}
	base = flag * NKyuusei[2] - 1 + 270;
	base += (JD - NKyuusei[0]) * flag;
	return base % 9;
}
function Jd2KyuuseiNameL2(JD)
{
	var ans;
	ans = Jd2Kyuusei(JD);
	if (ans >= 0) {
		return (KyuuseiName3[ans]);
	}
	return '';
}
function GetTenton(JD) {
	var KJD,KJDF;
	var n,ne;
	ne = KyuuseiJD.length;
	JD = Math.floor(JD);
	if (JD < KyuuseiJD[0]) return -1;
	if (JD >= KyuuseiJD[ne - 1]) return -1;

	for (n = 1 ; n < ne ; n++) {
		if (JD < KyuuseiJD[n]) break;
	}
	KJD = KyuuseiJD[n-1];
	KJDF = KyuuseiJDF[n-1];
	ne = KyuuseiJD[n];
	do {
		NKyuusei[0] = KJD;
		KJD += 180;
		if (KJD + 61 > ne) {KJD = ne;}
		if (JD >= KJD) {
			KJDF = (KJDF < 0) ? 1 : -9;
		}
	} while (JD >= KJD);
	NKyuusei[1] = KJD - NKyuusei[0];
	NKyuusei[2] = KJDF;
	return NKyuusei[0];
}

if (!document.layers&&!document.all) event="test"

function showtip2(current,e,text,tips,xing){
	if (document.all&&document.readyState=="complete"){
		var jie1,jie2,jie4,bt,pt,marquee,marx,wt,ht
		if (tips>2){
			jie1='<br>'+Jd2KyuuseiNameL2(tips);
			jie2='<br>'+GetSuku3D(tips*1);
			bt='#FDF5C4';
			pt='120';
			wt='200';
			marx=240;
			ht='200';
			text='<center><b>���������˼�</b></center><br>'+text
			xing='<br><br>'+xing;
		} else {
			bt='#EBEBEB';
			pt='55';
			jie1='';
			if (tips==1){jie2='<br>'+xing;wt='300';marx=120;ht='170';}
		  else if (tips==-1){jie2='<br>'+xing;wt='300';marx=120;ht='-40';}
			else if(tips==0){jie2='<br>'+month2[xing];wt='300';marx=120;ht='150';}
			else if (tips==2){jie4=tqyb[xing];if(jie4==undefined){text='<center><p>&nbsp;</p><p>�Բ���������������</p>';ht='-140';}else{text='<table align=center style="font-size: 9pt;"><tr><td align=right><br><b><font color=#FF8000>'+tD1+'/'+ybm1+'<br>'+tD2+'/'+ybm2+'<br>'+tD3+'/'+ybm3+'</td><td>'+jie4+'</td></tr></table>';ht='150';}jie2='';wt='400';marx=200;}
			xing='';
		}
		jie2=jie2.replace(/\n/g,"<br>");
		if (tips!=2){document.all.tip2.innerHTML='<table cellSpacing=1 cellPadding=0 bgColor=#f7f7f7 border=1><tr><td bgColor=#ffffff><table cellSpacing=1 cellPadding=0 bgColor=#e5e5e5 border=0><tr><td bgColor=#ffffff><table cellSpacing=1 cellPadding=0 bgColor=#b2b2b2 border=0><tr><td bgColor=#ffffff><table cellpadding=3 cellspacing=10 bgcolor='+bt+' width='+wt+'><tr><td style="font-size: 9pt" height='+pt+'><font color=#800080>'+text+'</font>'+jie1+'<font color=#800080>'+xing+'</font>'+jie2+'</td></tr></table></td></tr></table></td></tr></table></td></tr></table>';}
		if (tips==2) {
			document.all.tip2.innerHTML='<table cellSpacing=1 cellPadding=0 bgColor=#f7f7f7 border=1><tr><td bgColor=#ffffff><table cellSpacing=1 cellPadding=0 bgColor=#e5e5e5 border=0><tr><td bgColor=#ffffff><table cellSpacing=1 cellPadding=0 bgColor=#b2b2b2 border=0><tr><td bgColor=#ffffff><table cellpadding=3 cellspacing=10 bgcolor='+bt+' width='+wt+'><tr><td style="font-size: 9pt" height='+pt+'>'+text+'</td></tr></table></td></tr></table></td></tr></table></td></tr></table>';
		}
		var tip2x = window.event.clientX-marx;
		if (tip2x < document.body.scrollLeft){tip2x=window.event.clientX+20;}
		var tip2y = window.event.clientY-ht;
		if (tip2y < document.body.scrollTop){tip2y=window.event.clientY+20;}
		if (document.all) {
			tip2x=tip2x + window.document.body.scrollLeft;
			tip2y=tip2y + window.document.body.scrollTop;
		} else {
			tip2x=tip2x + window.pageXOffset;
			tip2y=tip2y + window.pageYOffset;
		}
		tip2.style.pixelLeft=tip2x;
		tip2.style.pixelTop=tip2y;
		document.all.tip2.style.visibility="visible"
	}
}

function hidetip2(){
	if (document.all){
		document.all.tip2.style.visibility="hidden";
	}
	else if (document.layers){
		clearInterval(currentscroll)
		document.tip2.visibility="hidden";
	}
}
