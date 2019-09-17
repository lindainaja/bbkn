<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
  <w:body>

<xsl:for-each select="root/row">
    <w:p w:rsidR="0040005B" w:rsidRPr="00D8545D" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:pStyle w:val="Heading1"/>
        <w:spacing w:after="0"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="26"/>
          <w:u w:val="single"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00D8545D">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
        </w:rPr>
        <w:t>SURAT KETERANGAN</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00D8545D" w:rsidRDefault="003E279D" w:rsidP="0040005B">
      <w:pPr>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">Nomor : </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="no"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00D8545D" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="5927"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="22"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>Y</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>ang bertanda tangan dibawah ini</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>:</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="14"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="001852E7" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t xml:space="preserve">            N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709" w:hanging="709"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00950A55">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>NIP</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00950A55" w:rsidRPr="001852E7" w:rsidRDefault="00950A55" w:rsidP="00950A55">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="720"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Jabatan</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">: </w:t>
      </w:r>
      <w:r w:rsidR="00EE3916">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="00950A55" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
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
        <w:t>Menerangkan dengan sebenarnya bahwa</w:t>
      </w:r>
      <w:r w:rsidR="008F0FE5">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>:</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="14"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00EA1743">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="003E279D" w:rsidRPr="00EB1B76" w:rsidRDefault="003E279D" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Jenis Kelamin</w:t>
      </w:r>
      <w:r w:rsidR="001852E7">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidR="001852E7">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="jenis_kelamin"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="001852E7" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709" w:hanging="709"/>
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
        <w:tab/>
      </w:r>
      <w:r w:rsidR="0040005B">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Tempat Tgl. Lahir</w:t>
      </w:r>
      <w:r w:rsidR="0040005B" w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttl"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="009D3D53" w:rsidRDefault="003E279D" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709"/>
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
        <w:t>Agama</w:t>
      </w:r>
      <w:r w:rsidR="0040005B" w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidR="0040005B" w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="agama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="003E279D" w:rsidRPr="00EB1B76" w:rsidRDefault="003E279D" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709"/>
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
        <w:t>Pekerjaan</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="pekerjaan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="009D3D53" w:rsidRDefault="0040005B" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709" w:hanging="709"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="001852E7">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Alamat</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="alamat"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="003E279D" w:rsidRDefault="003E279D" w:rsidP="001852E7">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709" w:hanging="709"/>
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
        <w:t xml:space="preserve">   </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>No. KTP</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:  </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="no_ktp"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="709" w:hanging="709"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00F33318" w:rsidRPr="00EB1B76" w:rsidRDefault="00950A55" w:rsidP="00F33318">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:firstLine="709"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
      </w:pPr>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t>Yang tersebut namanya diatas</w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve">, </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve"> adalah </w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve"> benar telah mempunyai  sebuah Kapal Nelayan </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
        </w:rPr>
        <w:t><xsl:value-of select="nama_kapal"/></w:t>
      </w:r>
      <w:r w:rsidR="00EE3916">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve">yang beroperasi di </w:t>
      </w:r>
      <w:r w:rsidR="009D3D53">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t> <xsl:value-of select="daerah_operasi"/> </w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve"> sampai saat ini</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t>.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:firstLine="720"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve">   Demikian surat keterangan ini dibu</w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t>at dengan sebenarnya untuk di</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t>gunakan</w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve"> seperlunya, dan apabila dilakukan dikemudian hari terdapat kekeliruan didalamnya, akan diadakan perbaikan sebagaimana mestinya</w:t>
      </w:r>
      <w:r w:rsidRPr="00EB1B76">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="00F33318">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t>.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00EA1743" w:rsidRPr="00EB1B76" w:rsidRDefault="00EA1743" w:rsidP="0040005B">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:firstLine="720"/>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="0" w:type="auto"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="4503"/>
        <w:gridCol w:w="5613"/>
      </w:tblGrid>
      <w:tr w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidTr="001852E7">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4503" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="007842AF">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="00AA2E22" w:rsidRDefault="00AA2E22" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00AA2E22">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t>Mengetahui</w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t xml:space="preserve"> :</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1656"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t>CAMAT LEGOK</w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="00EB1B76" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1656"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="00F91AB4" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="006A1116" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="14"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="00EB1B76" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="00DA37F5" w:rsidRDefault="009D3D53" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="659"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_camat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="001852E7" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00FC1339">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t xml:space="preserve">NIP : <xsl:value-of select="nip_camat"/></w:t>
            </w:r>
            <w:r w:rsidR="009D3D53">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t></w:t>
            </w:r>
            <w:r w:rsidRPr="001852E7">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:color w:val="FFFFFF" w:themeColor="background1"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t></w:t>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5613" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0040005B" w:rsidRDefault="009D3D53" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="659"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_kel"/></w:t>
            </w:r>
            <w:r w:rsidR="0040005B">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t xml:space="preserve">, </w:t>
            </w:r>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t><xsl:value-of select="tanggal_surat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="001852E7" w:rsidRPr="00EB1B76" w:rsidRDefault="001852E7" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="659"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRDefault="009D3D53" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1656"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="00F33318" w:rsidRPr="00EB1B76" w:rsidRDefault="00F33318" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1656"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRPr="00F91AB4" w:rsidRDefault="0040005B" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRPr="006A1116" w:rsidRDefault="0040005B" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="14"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRPr="00DA37F5" w:rsidRDefault="00866DA2" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="659"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
              </w:rPr>
              <w:t></w:t>
            </w:r>
            <w:bookmarkStart w:id="0" w:name="_GoBack"/>
            <w:bookmarkEnd w:id="0"/>
            <w:r w:rsidR="009D3D53">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="0040005B" w:rsidRPr="00FC1339" w:rsidRDefault="0040005B" w:rsidP="009D3D53">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="659"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00FC1339">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t xml:space="preserve">NIP : </w:t>
            </w:r>
            <w:r w:rsidR="009D3D53">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nip"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidTr="001852E7">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4503" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="007842AF">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:ind w:left="0" w:right="-364"/>
              <w:jc w:val="both"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5613" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0040005B" w:rsidRPr="00EB1B76" w:rsidRDefault="0040005B" w:rsidP="001852E7">
            <w:pPr>
              <w:pStyle w:val="Title"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="659"/>
              </w:tabs>
              <w:ind w:left="0" w:right="-364"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:pStyle w:val="Title"/>
        <w:ind w:left="0" w:right="-364"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="34"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="0040005B">
      <w:pPr>
        <w:pStyle w:val="Title"/>
        <w:ind w:left="0" w:right="-364"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="34"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="0040005B" w:rsidRDefault="0040005B" w:rsidP="0031608F">
      <w:pPr>
        <w:pStyle w:val="Title"/>
        <w:ind w:left="0" w:right="-364"/>
        <w:jc w:val="left"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="34"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00EF6F1C" w:rsidRPr="00EF6F1C" w:rsidRDefault="00EF6F1C" w:rsidP="001852E7">
      <w:pPr>
        <w:pStyle w:val="Heading1"/>
        <w:spacing w:after="0"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="16"/>
          <w:u w:val="single"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="00EF6F1C" w:rsidRPr="00EF6F1C" w:rsidSect="005C3009">
      <w:headerReference w:type="default" r:id="rId9"/>
      <w:pgSz w:w="12191" w:h="18711" w:code="1"/>
      <w:pgMar w:top="709" w:right="851" w:bottom="1440" w:left="1440" w:header="720" w:footer="720" w:gutter="0"/>
      <w:cols w:space="720"/>
      <w:docGrid w:linePitch="360"/>
    </w:sectPr>

</xsl:for-each>
  </w:body>
</w:document>
</xsl:template>
</xsl:stylesheet>
