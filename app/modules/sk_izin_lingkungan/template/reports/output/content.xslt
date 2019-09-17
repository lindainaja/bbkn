<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
  <w:document xmlns:ve="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml">
   <w:body>
    	<xsl:for-each select="root/row">
    <w:p w:rsidR="00976A93" w:rsidRPr="009C4BA0" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:sz w:val="36"/>
       <w:szCs w:val="36"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="009C4BA0">
      <w:rPr>
       <w:b/>
       <w:sz w:val="36"/>
       <w:szCs w:val="36"/>
       <w:u w:val="single"/>
      </w:rPr>
      <w:t>SURAT KETERANGAN IZIN LINGKUNGAN</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t xml:space="preserve">Yang </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>bertanda</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>tangan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>dibawah</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>ini</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> :</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="000715C9" w:rsidP="00976A93">
     <w:pPr>
      <w:numPr>
       <w:ilvl w:val="0"/>
       <w:numId w:val="1"/>
      </w:numPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t><xsl:value-of select="btd_1"/></w:t>
     </w:r>
     <w:r w:rsidR="00517AAC">
      <w:t></w:t>
     </w:r>
     <w:r w:rsidR="00BF6908">
      <w:t xml:space="preserve"> <xsl:value-of select="btd_1_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00517AAC" w:rsidP="00976A93">
     <w:pPr>
      <w:numPr>
       <w:ilvl w:val="0"/>
       <w:numId w:val="1"/>
      </w:numPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t><xsl:value-of select="btd_2"/></w:t>
     </w:r>
     <w:r w:rsidR="00BF6908">
      <w:t xml:space="preserve"> <xsl:value-of select="btd_2_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00517AAC" w:rsidP="00303697">
     <w:pPr>
      <w:pStyle w:val="ListParagraph"/>
      <w:numPr>
       <w:ilvl w:val="0"/>
       <w:numId w:val="1"/>
      </w:numPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t><xsl:value-of select="btd_3"/></w:t>
     </w:r>
     <w:r w:rsidR="00BF6908">
      <w:t xml:space="preserve"> <xsl:value-of select="btd_3_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00303697" w:rsidRDefault="00517AAC" w:rsidP="00303697">
     <w:pPr>
      <w:pStyle w:val="ListParagraph"/>
      <w:numPr>
       <w:ilvl w:val="0"/>
       <w:numId w:val="1"/>
      </w:numPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t><xsl:value-of select="btd_4"/></w:t>
     </w:r>
     <w:r w:rsidR="00BF6908">
      <w:t xml:space="preserve"> <xsl:value-of select="btd_4_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="006B6A4F" w:rsidRPr="00976A93" w:rsidRDefault="00517AAC" w:rsidP="00303697">
     <w:pPr>
      <w:pStyle w:val="ListParagraph"/>
      <w:numPr>
       <w:ilvl w:val="0"/>
       <w:numId w:val="1"/>
      </w:numPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t><xsl:value-of select="btd_5"/></w:t>
     </w:r>
     <w:r w:rsidR="00BF6908">
      <w:t xml:space="preserve"> <xsl:value-of select="btd_5_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>Dengan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>ini</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>tidak</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>keberatan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> / </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>memberikan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>izin</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>den</w:t>
     </w:r>
     <w:r w:rsidR="00303697">
      <w:t>gan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r w:rsidR="00303697">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00303697">
      <w:t>adanya</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r w:rsidR="00303697">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:rPr>
       <w:b/>
      </w:rPr>
      <w:t><xsl:value-of select="jenis_kegiatan"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r w:rsidR="00303697">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:rPr>
       <w:b/>
      </w:rPr>
      <w:t><xsl:value-of select="nama_kegiatan"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r w:rsidR="00030461">
      <w:t>.</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
     <w:r w:rsidR="00265A32">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>pada</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>hajatnya</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>seperti</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> yang </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>tersebut</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>dibawah</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>ini</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="008240F0" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t xml:space="preserve">N </w:t>
     </w:r>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>a</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
     <w:r>
      <w:t xml:space="preserve"> m a</w:t>
     </w:r>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="nama"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00517AAC" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Jenis</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Kelamin</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="jenis_kelamin"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00303697" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Tempat</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t>/</w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Tgl.Lahir</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="ttl"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00976A93" w:rsidRDefault="00303697" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Pekerjaan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="pekerjaan"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00517AAC">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>A</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
     <w:r>
      <w:t xml:space="preserve"> l a m a t</w:t>
     </w:r>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="alamat"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Adapun</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>untuk</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>waktu</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>pelaksanaanya</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>pada</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve">   :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00303697" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t xml:space="preserve">H </w:t>
     </w:r>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>a</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
     <w:r>
      <w:t xml:space="preserve"> r </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>i</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="hari_acara"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r w:rsidR="00A9501D">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00A9501D">
      <w:t><xsl:value-of select="hari_acara_ext"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Tanggal</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="tgl_acara"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t xml:space="preserve">J </w:t>
     </w:r>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>a</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
     <w:r>
      <w:t xml:space="preserve"> m </w:t>
     </w:r>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="jam_acara"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> WIB s/d </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Selesai</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00626D34" w:rsidP="00976A93">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t>A ca r a</w:t>
     </w:r>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="nama_acara"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00265A32" w:rsidRPr="00ED01BD" w:rsidRDefault="00976A93" w:rsidP="00517AAC">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="3240"/>
       <w:tab w:val="left" w:pos="3600"/>
      </w:tabs>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:left="90" w:firstLine="450"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t>T e m p a t</w:t>
     </w:r>
     <w:r>
      <w:tab/>
      <w:t>:</w:t>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="alamat_acara"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00976A93">
     <w:pPr>
      <w:spacing w:line="276" w:lineRule="auto"/>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:tab/>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
     <w:r>
      <w:tab/>
     </w:r>
    </w:p>
    <w:p w:rsidR="00230FA0" w:rsidRDefault="00976A93" w:rsidP="00CB7D66">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>Demikian</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:proofErr w:type="gramStart"/>
     <w:r>
      <w:t>surat</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:proofErr w:type="gramEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>izin</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>lingkungan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>ini</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>dibuat</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>dengan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>sebenarnya</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>untuk</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>dapat</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>diketahui</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>dan</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>kepada</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>pihak</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> yang </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>berwajib</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>mohon</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>bantuannya</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r>
      <w:t>.</w:t>
     </w:r>
     <w:r w:rsidR="00CB7D66">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r>
      <w:tab/>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00303697" w:rsidP="00CB7D66">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
     <w:r>
      <w:t xml:space="preserve">     </w:t>
     </w:r>
     <w:r w:rsidR="00030461">
      <w:t xml:space="preserve">        </w:t>
     </w:r>
     <w:r w:rsidR="006B6A4F">
      <w:t xml:space="preserve">      </w:t>
     </w:r>
     <w:r w:rsidR="00976A93">
      <w:t xml:space="preserve"> </w:t>
     </w:r>
    </w:p>
    <w:tbl>
     <w:tblPr>
      <w:tblW w:w="0" w:type="auto"/>
      <w:tblLayout w:type="fixed"/>
      <w:tblLook w:val="04A0"/>
     </w:tblPr>
     <w:tblGrid>
      <w:gridCol w:w="3078"/>
      <w:gridCol w:w="2970"/>
      <w:gridCol w:w="3258"/>
     </w:tblGrid>
     <w:tr w:rsidR="00CB7D66" w:rsidTr="00230FA0">
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="3078" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
        </w:pPr>
        <w:proofErr w:type="spellStart"/>
        <w:r>
         <w:t>Pemohon</w:t>
        </w:r>
        <w:proofErr w:type="spellEnd"/>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="2970" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
        </w:pPr>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="3258" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
        </w:pPr>
        <w:proofErr w:type="spellStart"/>
        <w:r>
         <w:t>Babakan</w:t>
        </w:r>
        <w:proofErr w:type="spellEnd"/>
        <w:r>
         <w:t xml:space="preserve">,  </w:t>
        </w:r>
        <w:proofErr w:type="spellStart"/>
        <w:r>
         <w:t><xsl:value-of select="tanggal_surat"/></w:t>
        </w:r>
        <w:proofErr w:type="spellEnd"/>
        <w:r>
         <w:t xml:space="preserve"> </w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">Yang </w:t>
        </w:r>
        <w:proofErr w:type="spellStart"/>
        <w:r>
         <w:t>Memberikan</w:t>
        </w:r>
        <w:proofErr w:type="spellEnd"/>
        <w:r>
         <w:t xml:space="preserve"> </w:t>
        </w:r>
        <w:proofErr w:type="spellStart"/>
        <w:r>
         <w:t>izin</w:t>
        </w:r>
        <w:proofErr w:type="spellEnd"/>
       </w:p>
      </w:tc>
     </w:tr>
     <w:tr w:rsidR="00CB7D66" w:rsidTr="00230FA0">
      <w:trPr>
       <w:trHeight w:val="1799"/>
      </w:trPr>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="3078" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00230FA0">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
        </w:pPr>
        <w:proofErr w:type="spellStart"/>
        <w:r>
         <w:rPr>
          <w:b/>
          <w:u w:val="single"/>
         </w:rPr>
         <w:t><xsl:value-of select="nama"/></w:t>
        </w:r>
        <w:proofErr w:type="spellEnd"/>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="2970" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="2"/>
         </w:numPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:ind w:left="252" w:hanging="180"/>
         <w:jc w:val="both"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve"> <xsl:value-of select="btd_1"/></w:t>
        </w:r>
        <w:r>
         <w:tab/>
         <w:t xml:space="preserve">           </w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="2"/>
         </w:numPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:ind w:left="252" w:hanging="180"/>
         <w:jc w:val="both"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve"> <xsl:value-of select="btd_2"/> </w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRPr="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="2"/>
         </w:numPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:ind w:left="252" w:hanging="180"/>
         <w:jc w:val="both"/>
         <w:rPr>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve"> </w:t>
        </w:r>
        <w:r w:rsidRPr="00CB7D66">
         <w:rPr>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
         </w:rPr>
         <w:t><xsl:value-of select="btd_3"/></w:t>
        </w:r>
        <w:r>
         <w:t></w:t>
        </w:r>
        <w:r w:rsidRPr="00CB7D66">
         <w:rPr>
          <w:sz w:val="22"/>
          <w:szCs w:val="22"/>
         </w:rPr>
         <w:tab/>
         <w:t xml:space="preserve">  </w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00CB7D66">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:ind w:left="252" w:hanging="180"/>
         <w:jc w:val="both"/>
         <w:rPr>
          <w:color w:val="FFFFFF"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">4. <xsl:value-of select="btd_4"/> </w:t>
        </w:r>
        <w:r>
         <w:rPr>
          <w:color w:val="FFFFFF"/>
         </w:rPr>
         <w:t xml:space="preserve"> </w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00230FA0">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:ind w:left="252" w:hanging="180"/>
         <w:jc w:val="both"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">5. <xsl:value-of select="btd_5"/> </w:t>
        </w:r>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="3258" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00F07679">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">: ( </w:t>
        </w:r>
        <w:r w:rsidR="00230FA0">
         <w:t xml:space="preserve">                                           </w:t>
        </w:r>
        <w:r>
         <w:t>)</w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00F07679">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">: ( </w:t>
        </w:r>
        <w:r w:rsidR="00230FA0">
         <w:t xml:space="preserve">                                           </w:t>
        </w:r>
        <w:r>
         <w:t>)</w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00F07679">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">: ( </w:t>
        </w:r>
        <w:r w:rsidR="00230FA0">
         <w:t xml:space="preserve">                                           </w:t>
        </w:r>
        <w:r>
         <w:t>)</w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00F07679">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">: ( </w:t>
        </w:r>
        <w:r>
         <w:tab/>
         <w:t xml:space="preserve">       </w:t>
        </w:r>
        <w:r w:rsidR="00230FA0">
         <w:t xml:space="preserve">                             </w:t>
        </w:r>
        <w:r>
         <w:t>)</w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00CB7D66" w:rsidRDefault="00CB7D66" w:rsidP="00F07679">
        <w:pPr>
         <w:spacing w:line="360" w:lineRule="auto"/>
        </w:pPr>
        <w:r>
         <w:t xml:space="preserve">: ( </w:t>
        </w:r>
        <w:r>
         <w:tab/>
         <w:t xml:space="preserve">                     </w:t>
        </w:r>
        <w:r w:rsidR="00230FA0">
         <w:t xml:space="preserve">               </w:t>
        </w:r>
        <w:r>
         <w:t>)</w:t>
        </w:r>
       </w:p>
      </w:tc>
     </w:tr>
    </w:tbl>
    <w:p w:rsidR="00CB7D66" w:rsidRPr="00976A93" w:rsidRDefault="00CB7D66" w:rsidP="00976A93">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:firstLine="540"/>
      <w:jc w:val="both"/>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00976A93" w:rsidRDefault="00976A93" w:rsidP="00D77252">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="center"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:proofErr w:type="gramStart"/>
     <w:r w:rsidRPr="00976A93">
      <w:t>Mengetahui</w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
     <w:r w:rsidRPr="00976A93">
      <w:t xml:space="preserve"> :</w:t>
     </w:r>
     <w:proofErr w:type="gramEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00626D34" w:rsidRDefault="00517AAC" w:rsidP="00D77252">
     <w:pPr>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:color w:val="000000" w:themeColor="text1"/>
      </w:rPr>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:rPr>
       <w:color w:val="000000" w:themeColor="text1"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRDefault="00976A93" w:rsidP="00D77252">
     <w:pPr>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:color w:val="000000" w:themeColor="text1"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="006B6A4F" w:rsidRPr="00626D34" w:rsidRDefault="006B6A4F" w:rsidP="00D77252">
     <w:pPr>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:color w:val="000000" w:themeColor="text1"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00626D34" w:rsidRDefault="00976A93" w:rsidP="00D77252">
     <w:pPr>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:color w:val="000000" w:themeColor="text1"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00626D34" w:rsidRDefault="00976A93" w:rsidP="00D77252">
     <w:pPr>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:color w:val="000000" w:themeColor="text1"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="006B6A4F" w:rsidRDefault="00517AAC" w:rsidP="00D77252">
     <w:pPr>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:b/>
       <w:color w:val="000000" w:themeColor="text1"/>
       <w:u w:val="single"/>
      </w:rPr>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:rPr>
       <w:b/>
       <w:color w:val="000000" w:themeColor="text1"/>
       <w:u w:val="single"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nama"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="00976A93" w:rsidRPr="00976A93" w:rsidRDefault="006B6A4F" w:rsidP="00D77252">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:jc w:val="center"/>
     </w:pPr>
     <w:proofErr w:type="spellStart"/>
     <w:r>
      <w:t>NIP.</w:t>
     </w:r>
     <w:r w:rsidR="00517AAC">
      <w:t><xsl:value-of select="ttd_nip"/></w:t>
     </w:r>
     <w:proofErr w:type="spellEnd"/>
    </w:p>
    <w:p w:rsidR="003E682C" w:rsidRDefault="003E682C"/>
    <w:sectPr w:rsidR="003E682C" w:rsidSect="006B6A4F">
     <w:pgSz w:w="12240" w:h="20160" w:code="5"/>
     <w:pgMar w:top="630" w:right="1440" w:bottom="1440" w:left="1440" w:header="720" w:footer="720" w:gutter="0"/>
     <w:cols w:space="720"/>
     <w:docGrid w:linePitch="360"/>
    </w:sectPr>
    	</xsl:for-each>
   </w:body>
  </w:document>
 </xsl:template>
</xsl:stylesheet>
