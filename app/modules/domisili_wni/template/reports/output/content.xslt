<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
  <w:body>

<xsl:for-each select="root/row">
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:spacing w:line="276" w:lineRule="auto"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">SURAT </w:t>
      </w:r>
      <w:proofErr w:type="gramStart"/>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">KETERANGAN </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> BERDOMISILI</w:t>
      </w:r>
      <w:proofErr w:type="gramEnd"/>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:spacing w:line="276" w:lineRule="auto"/>
        <w:ind w:left="142"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Nomor :  </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="no"/></w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Yang bertanda tangan dibawah ini :</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="1080"/>
          <w:tab w:val="left" w:pos="3828"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">: </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="1080"/>
          <w:tab w:val="left" w:pos="3828"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>N I P</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="1080"/>
          <w:tab w:val="left" w:pos="3828"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>Jabatan</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>Menerangkan dengan sebenarnya bahwa :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">  <xsl:value-of select="nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Jenis kelamin</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> <xsl:value-of select="jenis_kelamin"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Tempat, Tgl Lahir</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttl"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="720"/>
          <w:tab w:val="left" w:pos="1440"/>
          <w:tab w:val="left" w:pos="2160"/>
          <w:tab w:val="left" w:pos="2880"/>
          <w:tab w:val="left" w:pos="3600"/>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
          <w:tab w:val="center" w:pos="5220"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Status Perkawinan</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">  <xsl:value-of select="status_perkawinan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>Golongan Darah</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">  <xsl:value-of select="golongan_darah"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t>A g a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">  <xsl:value-of select="agama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">           </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">     </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Pekerjaan</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">  <xsl:value-of select="pekerjaan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3828"/>
          <w:tab w:val="left" w:pos="3969"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>Alamat</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="alamat"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="4320"/>
          <w:tab w:val="left" w:pos="4500"/>
        </w:tabs>
        <w:ind w:left="1134" w:hanging="1080"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360" w:firstLine="774"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Yang</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> tersebut</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> namanya</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> diatas</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> adalah</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> benar</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve"> berdomisili </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">di </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t><xsl:value-of select="domisili"/></w:t>
      </w:r>
      <w:r w:rsidRPr="001C58E4">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
        </w:rPr>
        <w:t xml:space="preserve">Banten </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Dusun/Dukuh/Kampung</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">  <xsl:value-of select="lingkungan"/> </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>Kelurahan Babakan, Kecamatan Legok, Kabupaten Tangerang, Provinsi Banten.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="426" w:firstLine="708"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t xml:space="preserve">Demikian Surat Keterangan </w:t>
      </w:r>
      <w:r w:rsidRPr="00FB24CE">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>ini kami buat dengan sebenarnya untuk diper</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
        <w:t>gunakan sebagaimana mestinya.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00443241" w:rsidRPr="00FB24CE" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="360"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="sv-SE"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="0" w:type="auto"/>
        <w:tblInd w:w="360" w:type="dxa"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="4310"/>
        <w:gridCol w:w="4573"/>
      </w:tblGrid>
      <w:tr w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidTr="0067698F">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4769" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:spacing w:line="360" w:lineRule="auto"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4879" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="881"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t xml:space="preserve">   <xsl:value-of select="nama_kel"/>, <xsl:value-of select="tanggal_surat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="585"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="12"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1361"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="10"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="00901E6F" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:szCs w:val="20"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:szCs w:val="20"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t xml:space="preserve">          </w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="10"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="10"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="10"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="10"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="00BE44E9" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1369"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:u w:val="single"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00F85D0A">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t xml:space="preserve">           </w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:u w:val="single"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="00F51B5E" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="1447"/>
              </w:tabs>
              <w:ind w:left="360"/>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t xml:space="preserve">       </w:t>
            </w:r>
            <w:r w:rsidRPr="00FB24CE">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t>NIP.</w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:lang w:val="pt-BR"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nip"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="0067698F">
            <w:pPr>
              <w:tabs>
                <w:tab w:val="left" w:pos="880"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:lang w:val="sv-SE"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="00443241" w:rsidRPr="006B0082" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:proofErr w:type="gramStart"/>
      <w:r w:rsidRPr="006B0082">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Catatan ;</w:t>
      </w:r>
      <w:proofErr w:type="gramEnd"/>
    </w:p>
    <w:p w:rsidR="004607D3" w:rsidRPr="00443241" w:rsidRDefault="00443241" w:rsidP="00443241">
      <w:pPr>
        <w:numPr>
          <w:ilvl w:val="0"/>
          <w:numId w:val="1"/>
        </w:numPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="300"/>
        </w:tabs>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Berlaku Sampai : <xsl:value-of select="berlaku_sampai"/></w:t>
      </w:r>
      <w:bookmarkStart w:id="0" w:name="_GoBack"/>
      <w:bookmarkEnd w:id="0"/>
    </w:p>
    <w:sectPr w:rsidR="004607D3" w:rsidRPr="00443241" w:rsidSect="00443241">
      <w:headerReference w:type="default" r:id="rId8"/>
      <w:pgSz w:w="11907" w:h="16839" w:code="9"/>
      <w:pgMar w:top="1440" w:right="1440" w:bottom="1440" w:left="1440" w:header="720" w:footer="720" w:gutter="0"/>
      <w:cols w:space="720"/>
      <w:docGrid w:linePitch="360"/>
    </w:sectPr>

</xsl:for-each>
  </w:body>
</w:document>
</xsl:template>
</xsl:stylesheet>
