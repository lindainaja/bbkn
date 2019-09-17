<?xml version="1.0" encoding="UTF-8" standalone="yes"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
  <w:body>

<xsl:for-each select="root/row">
    <w:p w:rsidR="004B5E5E" w:rsidRPr="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="009A352E">
      <w:pPr>
        <w:pStyle w:val="Heading1"/>
        <w:spacing w:line="276" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="16"/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004D00CE" w:rsidRPr="002D6B06" w:rsidRDefault="004D00CE" w:rsidP="009A352E">
      <w:pPr>
        <w:pStyle w:val="Heading1"/>
        <w:spacing w:line="276" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="26"/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
        </w:rPr>
        <w:t>SURAT KETERANGAN</w:t>
      </w:r>
      <w:r w:rsidR="00FA7B7A" w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="002D6B06">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="28"/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>PENGHASILAN</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="004D00CE" w:rsidRPr="004322AD" w:rsidRDefault="00FA7B7A" w:rsidP="009A352E">
      <w:pPr>
        <w:spacing w:line="276" w:lineRule="auto"/>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t xml:space="preserve">Nomor : </w:t>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="no"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="004D00CE" w:rsidRPr="004F345F" w:rsidRDefault="004D00CE" w:rsidP="004D00CE">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004D00CE" w:rsidRPr="004F345F" w:rsidRDefault="004D00CE" w:rsidP="004B5E5E">
      <w:pPr>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>Yang bertanda tangan dibawah ini :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0069017C" w:rsidRPr="004F345F" w:rsidRDefault="00171CF8" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00171CF8" w:rsidRPr="004F345F" w:rsidRDefault="00171CF8" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>N I P</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_nip"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00171CF8" w:rsidRPr="004F345F" w:rsidRDefault="00171CF8" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>Jabatan</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00171CF8" w:rsidRPr="004F345F" w:rsidRDefault="00171CF8" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>Menerangkan dengan sebenarnya bahwa :</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004B5E5E" w:rsidRDefault="00171CF8" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="2"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>N a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="nama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00353B86" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
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
        <w:tab/>
        <w:t>Jenis Kelamin</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="jenis_kelamin"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>Tempat / Tanggal Lahir</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="ttl"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3544"/>
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
        <w:tab/>
        <w:t>Status Perkawinan</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">:    </w:t>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="status_perkawinan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>P e k e r j a a n</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="pekerjaan"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>A g a m a</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="agama"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="id-ID"/>
        </w:rPr>
        <w:t>Alamat</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="alamat"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>Nomor KTP</w:t>
      </w:r>
      <w:r w:rsidR="004B5E5E">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>/Domisili</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
        <w:t>:</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="no_ktp"/>/<xsl:value-of select="domisili"/></w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="008A2E7B" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="4"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="720"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="4"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004F345F" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="3240"/>
          <w:tab w:val="left" w:pos="3420"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:left="720"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="4"/>
          <w:szCs w:val="20"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="0066437C" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t xml:space="preserve">            Yang tersebut namanya di atas benar</w:t>
      </w:r>
      <w:r w:rsidR="0066437C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> tergolong keluarga yang tidak mampu yang orang tuanya berpenghasilan rendah dan mempunyai</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> Pekerjaan sebagai </w:t>
      </w:r>
      <w:r w:rsidR="00DF1E01">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="pekerjaan"/></w:t>
      </w:r>
      <w:bookmarkStart w:id="0" w:name="_GoBack"/>
      <w:bookmarkEnd w:id="0"/>
      <w:r w:rsidR="00353B86" w:rsidRPr="008A6CC0">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">dengan </w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="009A352E">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>P</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t>enghasilan</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">  </w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t xml:space="preserve"> rata–rata </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">  </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t xml:space="preserve">setiap bulannya yaitu </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="009A352E">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t>Se</w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>besar</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> ± </w:t>
      </w:r>
      <w:r w:rsidRPr="00384093">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Rp</w:t>
      </w:r>
      <w:r w:rsidR="00353B86" w:rsidRPr="00384093">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">. </w:t>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="penghasilan"/></w:t>
      </w:r>
      <w:r w:rsidRPr="00384093">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="20"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="20"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve">  </w:t>
      </w:r>
      <w:r w:rsidRPr="004B5E5E">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t>(</w:t>
      </w:r>
      <w:r w:rsidR="009F1F45" w:rsidRPr="004B5E5E">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:i/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="penghasilan_txt"/></w:t>
      </w:r>
      <w:r w:rsidR="006B4087">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> )</w:t>
      </w:r>
      <w:r w:rsidR="0066437C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="0066437C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> Berdomisili di <xsl:value-of select="domisili"/></w:t>
      </w:r>
      <w:r w:rsidR="0066437C" w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> Dusun/Dukuh/Kampung</w:t>
      </w:r>
      <w:r w:rsidR="0066437C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="0066437C" w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="004322AD">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t><xsl:value-of select="lingkungan"/></w:t>
      </w:r>
      <w:r w:rsidR="0066437C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
      <w:r w:rsidR="0066437C">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>Kelurahan Babakan.</w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="00142126" w:rsidRPr="004B5E5E" w:rsidRDefault="00142126" w:rsidP="004B5E5E">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:ind w:firstLine="624"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="14"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t>Demikian surat keterangan ini dibuat dengan sebenarnya dan digunakan sebagaimana perlunya</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>.</w:t>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:t xml:space="preserve"> </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0013219E" w:rsidRPr="004F345F" w:rsidRDefault="00C07530" w:rsidP="009A352E">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="709"/>
          <w:tab w:val="left" w:pos="3261"/>
          <w:tab w:val="left" w:pos="3544"/>
        </w:tabs>
        <w:spacing w:line="360" w:lineRule="auto"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
        <w:t>.</w:t>
      </w:r>
      <w:r w:rsidR="004D00CE" w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:t xml:space="preserve">                                              </w:t>
      </w:r>
      <w:r w:rsidR="004D00CE" w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidR="004D00CE" w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
        </w:rPr>
        <w:tab/>
      </w:r>
    </w:p>
    <w:tbl>
      <w:tblPr>
        <w:tblW w:w="10173" w:type="dxa"/>
        <w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
      </w:tblPr>
      <w:tblGrid>
        <w:gridCol w:w="5211"/>
        <w:gridCol w:w="4962"/>
      </w:tblGrid>
      <w:tr w:rsidR="0013219E" w:rsidRPr="004F345F" w:rsidTr="00424C92">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5211" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0013219E" w:rsidRPr="004F345F" w:rsidRDefault="004D00CE" w:rsidP="001D0595">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="004F345F">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:tab/>
            </w:r>
            <w:r w:rsidRPr="004F345F">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
              <w:tab/>
            </w:r>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4962" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="0013219E" w:rsidRDefault="00186AEB" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="3578"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t></w:t>
            </w:r>
            <w:r w:rsidR="004322AD">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="nama_kel"/></w:t>
            </w:r>
            <w:r w:rsidR="009A352E">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t>,</w:t>
            </w:r>
            <w:r w:rsidR="00384093">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t xml:space="preserve"> </w:t>
            </w:r>
            <w:r w:rsidR="004322AD">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="tanggal_surat"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="009A352E" w:rsidRPr="004B5E5E" w:rsidRDefault="009A352E" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="8"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="007240DC" w:rsidRDefault="004322AD" w:rsidP="004322AD">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:ind w:left="1260" w:hanging="1260"/>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="009A352E" w:rsidRDefault="009A352E" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="009A352E" w:rsidRPr="004B5E5E" w:rsidRDefault="009A352E" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="2"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="009A352E" w:rsidRDefault="009A352E" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="009A352E" w:rsidRPr="004F345F" w:rsidRDefault="009A352E" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="007240DC" w:rsidRPr="00ED542E" w:rsidRDefault="007240DC" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="2"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
          <w:p w:rsidR="009A352E" w:rsidRDefault="004322AD" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nama"/></w:t>
            </w:r>
          </w:p>
          <w:p w:rsidR="000C6EE7" w:rsidRPr="009A352E" w:rsidRDefault="007240DC" w:rsidP="004322AD">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:u w:val="single"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
            <w:r w:rsidRPr="00D05937">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t xml:space="preserve">NIP : </w:t>
            </w:r>
            <w:r w:rsidR="004322AD">
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:b/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
              <w:t><xsl:value-of select="ttd_nip"/></w:t>
            </w:r>
          </w:p>
        </w:tc>
      </w:tr>
      <w:tr w:rsidR="009A352E" w:rsidRPr="004F345F" w:rsidTr="00424C92">
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="5211" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="009A352E" w:rsidRPr="004F345F" w:rsidRDefault="009A352E" w:rsidP="001D0595">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="center"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
        <w:tc>
          <w:tcPr>
            <w:tcW w:w="4962" w:type="dxa"/>
          </w:tcPr>
          <w:p w:rsidR="009A352E" w:rsidRDefault="009A352E" w:rsidP="009A352E">
            <w:pPr>
              <w:pStyle w:val="BodyText"/>
              <w:tabs>
                <w:tab w:val="left" w:pos="1260"/>
                <w:tab w:val="left" w:pos="5400"/>
                <w:tab w:val="left" w:pos="6660"/>
              </w:tabs>
              <w:jc w:val="left"/>
              <w:rPr>
                <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
                <w:sz w:val="24"/>
                <w:lang w:val="en-US"/>
              </w:rPr>
            </w:pPr>
          </w:p>
        </w:tc>
      </w:tr>
    </w:tbl>
    <w:p w:rsidR="004D00CE" w:rsidRPr="004F345F" w:rsidRDefault="004D00CE" w:rsidP="001D0595">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:tabs>
          <w:tab w:val="left" w:pos="1260"/>
          <w:tab w:val="left" w:pos="5400"/>
          <w:tab w:val="left" w:pos="6660"/>
        </w:tabs>
        <w:jc w:val="center"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="008D5FC1" w:rsidRPr="004F345F" w:rsidRDefault="0013219E" w:rsidP="0013219E">
      <w:pPr>
        <w:pStyle w:val="BodyText"/>
        <w:tabs>
          <w:tab w:val="left" w:pos="624"/>
          <w:tab w:val="left" w:pos="1872"/>
          <w:tab w:val="left" w:pos="2496"/>
          <w:tab w:val="left" w:pos="3120"/>
          <w:tab w:val="left" w:pos="3744"/>
          <w:tab w:val="left" w:pos="4368"/>
          <w:tab w:val="left" w:pos="4992"/>
          <w:tab w:val="left" w:pos="5616"/>
          <w:tab w:val="left" w:pos="6240"/>
        </w:tabs>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
      </w:r>
      <w:r w:rsidRPr="004F345F">
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:sz w:val="24"/>
        </w:rPr>
        <w:tab/>
        <w:t xml:space="preserve">             </w:t>
      </w:r>
    </w:p>
    <w:p w:rsidR="0008455A" w:rsidRDefault="0008455A" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:p w:rsidR="004B5E5E" w:rsidRDefault="004B5E5E" w:rsidP="001A01B5">
      <w:pPr>
        <w:tabs>
          <w:tab w:val="left" w:pos="360"/>
          <w:tab w:val="left" w:pos="4500"/>
          <w:tab w:val="left" w:pos="4680"/>
        </w:tabs>
        <w:jc w:val="both"/>
        <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
        </w:rPr>
      </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="004B5E5E" w:rsidSect="00FA7B7A">
      <w:headerReference w:type="default" r:id="rId8"/>
      <w:pgSz w:w="12191" w:h="18711" w:code="136"/>
      <w:pgMar w:top="567" w:right="851" w:bottom="748" w:left="1260" w:header="709" w:footer="709" w:gutter="0"/>
      <w:cols w:space="708"/>
      <w:docGrid w:linePitch="360"/>
    </w:sectPr>

</xsl:for-each>
  </w:body>
</w:document>
</xsl:template>
</xsl:stylesheet>
